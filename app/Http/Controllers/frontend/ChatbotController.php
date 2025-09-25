<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\GeminiService;
use App\Models\DocumentChunk;
use App\Helpers\GeminiHelper;
// use Illuminate\Support\Facades\DB;


class ChatbotController extends Controller
{

      public function __construct( GeminiService $geminiService) {
        $this->geminiService = $geminiService;
    }
    function chatbot(){
        return view('user.chatbot');
    }

    
    public function notifyOperator(Request $req)
    {
    //    $message = $request->input('message'); // user ka message fetch

    //     // Ab yahan aap database insert, AI/Agent forward ya jo bhi logic notify_operator.php me tha, likh sakte ho
    //     // Demo ke liye me ek static response bhej raha hoon:
    //     // switch($message){
    //     //     case "hi":
    //     //         response()->json([
    //     //     'answer' => [
    //     //         "Welcome! 👋",
    //     //         "How can I assist you today?"
    //     //     ]
    //     //     ]);
    //     //      break;
    //     //      case "ai":
    //     //         response()->json([
    //     //     'answer' => [
    //     //         "Hello! 👋",   "How can I assist you today?"
    //     //     ]
    //     //     ]);
 
    //     // }

    //     if ($message === "send pdf") {
    //         return response()->json([
    //             'answer' => 'pdf',
    //             'pdf_url' => url('storage/sample.pdf') // storage/public/sample.pdf
    //         ]);
    //     }

    //     elseif ($message === "ai") {
    //         $message = $this->geminiService->gemini($message);
    //         return response()->json([
    //             'answer' => [
    //             $message
    //             ]]);
    //         // return response()->json([
    //         //     'answer' => [
    //         //     "Welcome! 👋",
    //         //     "How  I am ai?"
    //         //     ]
    //         //     // 'pdf_url' => url('storage/sample.pdf') // storage/public/sample.pdf
    //         // ]);
    //     }

    //     return response()->json([
    //         'answer' => [
    //             "Welcome! 👋",
    //             "How can I assist you today?"
    //         ]
    //     ]);



    
        // $req->validate(['query' => 'required|string']);
        $query = $req->input('message');

        // 1) Query embedding
        $qEmbed = GeminiHelper::getEmbedding($query);

        // 2) Compare with stored embeddings
        // $chunks = DocumentChunk::all();
        $chunks =DocumentChunk::join('documents', 'document_chunks.document_id', '=', 'documents.id')
        ->where('documents.u_id', 15) // sirf usi user ke docs
        ->select('document_chunks.*')
        ->get();
        $scored = [];
        foreach ($chunks as $chunk) {
            $score = $this->cosineSimilarity($qEmbed, $chunk->embedding);
            $scored[] = ['text' => $chunk->chunk_text, 'score' => $score];
        }

        // 3) Pick top 3 chunks
        usort($scored, fn($a,$b)=>$b['score'] <=> $a['score']);
        $top = array_slice($scored, 0, 3);

        $context = implode("\n---\n", array_column($top, 'text'));

        // 4) Ask Gemini with context
        $prompt = "You are a chatbot for iqra university. Use only the following context:\n\n$context\n\nUser query: $query";
        $answer = GeminiHelper::generate($prompt);

        return response()->json(['answer' => $answer]);
    }

    private function cosineSimilarity($vec1, $vec2) {
        $dot=0; $norm1=0; $norm2=0;
        $len = min(count($vec1), count($vec2));
        for ($i=0;$i<$len;$i++) {
            $dot += $vec1[$i]*$vec2[$i];
            $norm1 += $vec1[$i]**2;
            $norm2 += $vec2[$i]**2;
        }
        return $dot / (sqrt($norm1)*sqrt($norm2)+1e-10);
    }
    
}
