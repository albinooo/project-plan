<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    // function projects(){
    //     $projects = DB::table('projects')->get();  // Mengambil semua proyek
    //     $totalProjects = DB::table('projects')->count();  // Menghitung total proyek

    //     return view('/dashboard', [
    //         'projects' => $projects,
    //         'totalProjects' => $totalProjects,  // Kirim total proyek ke view
    //     ]);
    // }

    public function index()
    {
    $projects = Project::all();
    return view("project")->with('projects', $projects);
    }
    
    public function indexdash()
    {
    $projects = Project::all();
    return view("dashboard");
    }

    public function add()
    {
        return view("add");
    }

    public function save(Request $request)
    {
    $this->validate($request, [
        'name' => 'required',
        'date' => 'required' // Pastikan ini sesuai dengan nama input pada formulir
    ]);

    Project::create([
        'name' => $request->name,
        'desc' => $request->desc,
        'date' => $request->date // Pastikan ini sesuai dengan nama input pada formulir
    ]);

    return redirect('/dashboard')->with('success', 'Project berhasil ditambahkan.');
    }

    public function edit($idpj) 
    {
        $projects = Project::find($idpj);
        return view("editpj", compact('projects'));
    }

    public function update(Request $request, $idpj)
    {
        $projects = Project::find($idpj);
        $name = $request->name;
        $desc = $request->desc;
        $date = $request->date;

        $projects->name = $name;
        $projects->desc = $desc;
        $projects->date = $date;
        $data = $projects->save();
        if ($data) {
            session()->flash('success','Project Update Succesfully');
            return redirect(route('dashboard'));
        } else { 
            session()->flash('error','Some Problem Occure');
            return redirect(route('update'));
        }
    }

    public function delete($idpj)
    {
        $project = Project::find($idpj);

        if (!$project) {
            // Handle jika proyek tidak ditemukan
            return redirect()->back()->with('error', 'Project Not Found.');
        }
    
        $project->delete();
        return redirect()->back()->with('success', 'Project Deleted.');
    }
}
