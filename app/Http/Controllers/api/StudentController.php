<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Student::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "gender"=>"required",
            "grade"=>"required"
        ]);
        $requestData = $request->all();

        $student=Student::create($requestData);
        $student->save();
        return ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //

        return $student;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Student $student)
    {
        //
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "gender"=>"required",
            "grade"=>"required"
        ]);
        $data = $request->all();
        $student->update($data);
        return $student;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
        $student->delete();
        return "student deleted successfully";
    }
}
