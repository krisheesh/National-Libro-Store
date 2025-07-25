<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BookController;

// ...existing code...
Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
// /**
//     * Show Task Dashboard
//     */
// Route::get('/', function () {
//     Log::info("Get /");
//     $startTime = microtime(true);
//     // Simple cache-aside logic
//     if (Cache::has('tasks')) {
//         $data = Cache::get('tasks');
//     } else {
//         $data = Task::orderBy('created_at', 'asc')->get();
//         Cache::add('tasks', $data);
//     }
//     return view('tasks', ['tasks' => $data, 'elapsed' => microtime(true) - $startTime]);
// });

// /**
//     * Add New Task
//     */
// Route::post('/task', function (Request $request) {
//     Log::info("Post /task");
//     $validator = Validator::make($request->all(), [
//         'name' => 'required|max:255',
//     ]);

//     if ($validator->fails()) {
//         Log::error("Add task failed.");
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }

//     $task = new Task;
//     $task->name = $request->name;
//     $task->save();
//     // Clear the cache
//     Cache::flush();

//     return redirect('/');
// });

// /**
//     * Delete Task
//     */
// Route::delete('/task/{id}', function ($id) {
//     Log::info('Delete /task/'.$id);
//     Task::findOrFail($id)->delete();
//     // Clear the cache
//     Cache::flush();

//     return redirect('/');
// });
