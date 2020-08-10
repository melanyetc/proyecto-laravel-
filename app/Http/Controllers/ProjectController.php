<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;

use App\Project;
 
use Illuminate\Http\Request;


class ProjectController extends Controller
{
   
   public function __construct()
    {

       $this->middleware('auth')->except('index', 'show');
   } 

    public function index()
    {
        
        
        return view('projects.index',[

            'projects' => Project::latest()->paginate()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {

       
       
      Project::create( $request->validated());

      return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        

        return view('projects.show',[
        'project' => $project

        ]);
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project

        ]);
    }

    public function create()
    {
        return view('projects.create', [
           
           'project' => new Project

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update( $request->validated() );
            

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito');
    }
}
