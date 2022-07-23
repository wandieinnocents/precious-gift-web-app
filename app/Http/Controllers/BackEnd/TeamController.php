<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("Index");
        $projects = Project::all();
        $count_projects = Project::count();
        $project_categories = ProjectCategory::all();
        return view('backend.pages_backend.projects.index',compact('projects','count_projects','project_categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages_backend.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'team_photo' => 'required|mimes:jpeg,jpg,png',
            
        ]);

    $team = new Team();
    $team->team_name = $request->project_category_id;
    $team->team_role        = $request->project_name;
    $team->team_description = $request->project_description;

    // photo
    if($request->hasfile('team_photo')){
        $file               = $request->file('team_photo');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/team_photos/',$filename);
        $team->team_photo   = url('uploads' . '/team_photos/'  . $filename);
    }
    
    $team->save();

    return redirect('/teams');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect('/projects')->with('success', 'Project is successfully deleted');
    }
}
