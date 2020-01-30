<?php

namespace App\Http\Controllers;

use App\Educational_programes;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     * StudentController
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('students')->get();
        $eds = DB::table('educational_programes')->get();
        $studentsFWD19 = DB::table('students')->where('class', 'FWD19')->get();
        $studentsFWD20 = DB::table('students')->where('class', 'FWD20')->get();
        $studentsIK19 = DB::table('students')->where('class', 'IK19')->get();
        $studentsIK20 = DB::table('students')->where('class', 'IK20')->get();

        $params = [
            'students'=> $students,
            'eds' => $eds,
            'studentsFWD19' => $studentsFWD19,
            'studentsFWD20' => $studentsFWD20,
            'studentsIK19' => $studentsIK19,
            'studentsIK20' => $studentsIK20
        ];

        return view('student', $params);
    }

    public function indexClass($class)
    {
        var_dump($_GET['studentClass']);
        $class = $_GET['studentClass'];
        $student = Student::where('class', 'LIKE %' . $class . '%')->get();

        return view('student', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::where('studentID', $id)->get();
        return view('showStudent', [
            'student' => $student
        ]);
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
