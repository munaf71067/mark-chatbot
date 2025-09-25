<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\KeySearchController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ConfigureAIController;
use App\Http\Controllers\frontend\ChatbotController;
use App\Http\Controllers\AddQuestionController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');

Route::get('/add_question', [AddQuestionController::class,'add_question'])->name('add_question');
Route::get('/view_question', [QuestionController::class,'view_question'])->name('view_question');
Route::get('/configure_ai', [ConfigureAIController::class,'configure_ai'])->name('configure_ai');


Route::get('/list_key_search', [KeySearchController::class,'list_key_search'])->name('list_key_search');
Route::get('/add_key_search', [AdminController::class,'add_key_search'])->name('add_key_search');

Route::get('/view_report', [ReportController::class,'view_report'])->name('view_report');



Route::get('/operator', [AdminController::class,'operator'])->name('operator');
// 
//frontend routes
Route::get('/chatbot', [ChatbotController::class,'chatbot'])->name('chatbot');
Route::post('/chatbot', [ChatbotController::class,'notifyOperator']);



/// req
Route::post('/load-req', [RequestController::class, 'loadReq'])->name('load.req');
// Route::post('/load-reqtranfer', [RequestController::class, 'loadReqTransfer'])->name('load.req_tranfer');


Route::post('/transfer-data', [RequestController::class, 'transferData'])->name('transfer.data');
Route::post('/transfer-data-idex', [RequestController::class, 'transferDataIdex'])->name('transfer.data.idex');


/// logic routes
Route::post('/upload-ai-document', [ConfigureAIController::class, 'uploaddoc'])->name('ai.document');


