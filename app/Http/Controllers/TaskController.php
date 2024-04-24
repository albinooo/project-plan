<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
    $tasks = Task::all();
    return view("detail")->with('tasks', $tasks);
    }
    
    public function create()
    {
        return view("create");
    }

    public function save(Request $request)
{
    // Validasi input
    $this->validate($request, [
        'task' => 'required', // Pastikan input untuk task diisi
        'desc' => 'required', // Menambahkan validasi untuk deskripsi
        'date' => 'required'  // Memastikan tanggal diisi
    ]);

    // Membuat task baru dengan data yang benar
    Task::create([
        'task' => $request->task, // Memperbaiki dari name ke task
        'desc' => $request->desc, // Memastikan deskripsi tersimpan
        'date' => $request->date  // Menggunakan tanggal dari form
    ]);

    // Redirect ke halaman detail dengan pesan sukses
    return redirect('/detail')->with('success', 'Task berhasil ditambahkan.');
}

    
}
