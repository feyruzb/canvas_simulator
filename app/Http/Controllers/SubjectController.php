<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Requests\SubjectFormRequest;
use App\Policies\SubjectPolicy;


class SubjectController extends Controller
{
    public function subject() {
        $subjects_db= Subject::all();
        return view('projects.subjects',["subjects_db"=> $subjects_db]); // subjects.blade.php
    }

    public function create() {
        $this->authorize('create',Subject::class);
        return view('projects.create'); // create.blade.php
    }

    public function store(SubjectFormRequest $request) { // store data from create.blade.php
        Subject::create($request->validated());
        return redirect("/subjects");
    }   

    public function about_t() {
        return view('/about'); // about.blade.php
    }

    public function edit(Subject $project) {
        return view('projects.edit',["project" => $project]); // edit.blade.php
    }

    public function update(SubjectFormRequest $request,Subject $project) { // store data from create.blade.php
        $project->update($request->validated());
        return redirect("/subjects");
    }

    public function show(Subject $project) {
        return view('projects.show',["subject" => $project]); // show.blade.php
    }

    public function destroy(Subject $project) {
        $project->delete();
        return redirect("/subjects");
    }

  

    

    
    
}
