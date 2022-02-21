<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\StudentController;
use Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dashboard');
    }
    // public function list()
    // {
    //     return view('pages.view');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    public function view()
    {
        return view('pages.view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:20',
            'email' => 'required|string|unique:students|max:50',
            'course' => 'required|string',
            'fee' => 'required|string',
            'password' => 'required|string|min:5',
        ]);
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->course = $request->course;
        $student->fee = $request->fee;
        $student->fee = $request->fee;
        $student->password = Hash::make($request->password);
        $student->save();

        // return redirect()->route('student.show');
        // if($student){
        //     return back()->with('msg','Data has been updated successfully.');
        // }else{
        //     return back()->with('failed','has not updated');
        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $students = Student::all();
        return view('pages.show',compact('students'));
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
        //
    }
}
