<?php

namespace App\Helpers;

class GeminiHelper
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    
    public static function getEmbedding(string $text): array {
         ini_set('max_execution_time', 300); // Increase execution time
        $apiKey = "AIzaSyCGx2oAu_i5JAWJWqhzxqzYsyu-iulSS48";
        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-embedding-001:embedContent?key=$apiKey";

        $payload = [
            "model" => "models/gemini-embedding-001",
            "content" => ["parts" => [["text" => $text]]]
        ];

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
            CURLOPT_POSTFIELDS => json_encode($payload),
             CURLOPT_TIMEOUT => 30,
             CURLOPT_CONNECTTIMEOUT => 10,
        ]);
        $response = curl_exec($ch);
        curl_close($ch);

        $res = json_decode($response, true);
        return $res['embedding']['values'] ?? [];
    }

    public static function generate(string $prompt): string {
        ini_set('max_execution_time', 300); // Increase execution time

        $apiKey = "AIzaSyCGx2oAu_i5JAWJWqhzxqzYsyu-iulSS48";
        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=$apiKey";

        $payload = [
            "contents" => [[
                "parts" => [["text" => $prompt]]
            ]]
        ];

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_TIMEOUT => 30, // Total timeout in seconds
            CURLOPT_CONNECTTIMEOUT => 10, // Max time to wait for connection
        ]);
        $response = curl_exec($ch);
        curl_close($ch);

        $res = json_decode($response, true);
        return $res['candidates'][0]['content']['parts'][0]['text'] ?? "No response";
    }
}
