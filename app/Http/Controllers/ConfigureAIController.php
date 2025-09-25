<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\AIDocument ;
use App\Models\Document;
use App\Models\DocumentChunk;
use Smalot\PdfParser\Parser;
use PhpOffice\PhpWord\IOFactory;
use Maatwebsite\Excel\IOFactory as ExcelIO;
use App\Helpers\GeminiHelper;

class ConfigureAIController extends Controller
{
    //

    function configure_ai(){
        $files = Document::latest()->get();

        return view('configure_ai',  compact('files'));
    }

    function uploaddoc(Request $req){
        // return $request->file;

        
        $req->validate(['file' => 'required|file']);
        $file = $req->file('file');
        $path = $file->store('docs','public');
        $u_id = 15;

        $doc = Document::create([
            'title' => $file->getClientOriginalName(),
            'file_path' => $path,
            'u_id' =>  $u_id
        ]);

        // 🔹 Extract text
        $ext = strtolower($file->getClientOriginalExtension());
        if ($ext === 'pdf') {
            $parser = new Parser();
            $pdf = $parser->parseFile(storage_path("app/public/$path"));
            $text = $pdf->getText();
        } elseif ($ext === 'docx') {
            $phpWord = IOFactory::load(storage_path("app/public/$path"));
            $text = '';
            foreach ($phpWord->getSections() as $section) {
                foreach ($section->getElements() as $element) {
                    // if (method_exists($element, 'getText')) {
                    //     $text .= $element->getText()." ";
                    // }
                    if ($element instanceof \PhpOffice\PhpWord\Element\Text) {
    $text .= $element->getText() . " ";
} elseif ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
    foreach ($element->getElements() as $subElement) {
        if ($subElement instanceof \PhpOffice\PhpWord\Element\Text) {
            $text .= $subElement->getText() . " ";
        }
    }
}

                }
            }
        } elseif ($ext === 'xlsx') {
            $spreadsheet = ExcelIO::load(storage_path("app/public/$path"));
            $text = '';
            foreach ($spreadsheet->getAllSheets() as $sheet) {
                foreach ($sheet->toArray() as $row) {
                    $text .= implode(" ", $row)." ";
                }
            }
        } else {
            return response()->json(['error' => 'Unsupported file type']);
        }

        // 🔹 Chunk text
        $chunks = str_split($text, 800); // 800 char chunks

        foreach ($chunks as $chunk) {
            $embedding = GeminiHelper::getEmbedding($chunk);
            DocumentChunk::create([
                'document_id' => $doc->id,
                'chunk_text' => $chunk,
                'embedding' => $embedding
            ]);
        }

        // return response()->json(['success' => true, 'document_id' => $doc->id]);
        return back()->with('success', 'File uploaded successfully!');


        //old
        // $request->validate([
        //     'file' => 'required|mimes:xlxs,pdf,docx|max:2048'
        // ]);

       
        // $file = $request->file('file');
        // $path = $file->store('uploads', 'public'); 

        // $doc = new AIDocument();
        // $doc->u_id = 15; 
        // $doc->document = 'storage/' . $path;  
        // $doc->save();

        // return back()->with('success', 'File uploaded successfully!');
    }
}
