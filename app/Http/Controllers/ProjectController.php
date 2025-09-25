<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Lab;

class ProjectController extends Controller
{
    public function index()
    {
        $project = new Project();
        $items = $project::with('lab')->orderByDesc('budget')->get();
        return view('project', compact('items'));
    }

    public function showForm(){
        $Lab = new Lab();
        $items = $Lab::all();
        return view('create', compact('items'));
    }

    public function addProject(Request $request){
        $lab = Lab::where('abbreviation', $request->abbr)->first();
        Project::create([
            'project_name'=> $request->namepj,
            'budget'=> $request->budgetpj,
            'lab_id'=> $lab->id
        ]);

        return redirect('/projects');
    }

    public function editForm($id){
    $project = Project::findOrFail($id);
    $labs = Lab::all();
    return view('create', compact('project', 'labs'));
    }

    public function update(Request $request, $id){
        $lab = Lab::where('abbreviation', $request->abbr)->first();
        $project = Project::findOrFail($id);
        $project->update([
            'project_name' => $request->namepj,
            'budget' => $request->budgetpj,
            'lab_id' => $lab->id
        ]);
        return redirect('/projects');
    }

    public function destroy($id){
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect('/projects');
    }


}

