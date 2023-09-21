<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use illuminate\View\View;
use App\Models\Students;
use DB;
class StudentController extends Controller
{
    protected $students;
    public function __construct(){
        $this->students=new Students();
    }
    /**
     * Display a listing of the resource.
     */
    public function page():view
    {
        $students= Students::all();
        return view('etudiant.page')->with('students',$students);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $student = new Students();
       // view
       return view('etudiant.create', compact('student'));
    //    return redirect()->route('student.page')->with('success', 'updated successfully');
    }
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post=[
            'name' => $request->input ('name'),
            'email' => $request->input('email'),
            'place' => $request->input('place')
    ];

    Students::create($post);
    // route
    return redirect()->route('student.page')
                    ->with('success','Students has been updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Students::find($id);
        //key ao @array no disponible en view(ex'student) ';
        return view('etudiant.update',['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required',
        'email' => 'required',
        'place' => 'required',
    ]);
     
    $studets = Students::find($id);

    $studets->name = $request->name;
    $studets->email = $request->email;
    $studets->place = $request->place;

    $studets->save();
 
    return redirect()->route('student.page')
                    ->with('success','Students has been updated successfully');
            

    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Students::destroy($id);
        return redirect()->route('student.page')->with('success', 'Deletion is complete');
    }
}
