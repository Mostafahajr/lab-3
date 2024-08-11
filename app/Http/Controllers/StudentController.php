<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Part\File;

class StudentController extends Controller
{
    //
    function list(){
        $students = Student::all();
        return view("students",["students"=>$students]);
    }
    function create(){
        return view("create");
    }
    function view($id){
        $student = Student::find($id);
        return view("viewStudent",["student"=>$student]);
    }
    function delete($id){
        $student=Student::find($id);
        $student->delete();
        $students = Student::all();
        return view("students",["student"=>$students]);
    }
    function store(){
        $response = request()->all();
        $student =new Student();
        $student->name=$response["name"];
        $student->email=$response["email"];
        $student->password = $response["password"];

        $student->address=$response["address"];
        $student->gender=$response["gender"];

        $filePath = public_path("uploads");
        $image=request()->file("image");
        $image_name = time().$image->getClientOriginalName();
        $image->move($filePath,$image_name);
        $student->image = $image_name;

        $student->save();
        return to_route("students");
    }

    function update($id){
        $student= Student::find($id);
        return view("update",compact("student"));
    }
    function edit($id){
        $student=Student::find($id);
        $response=request()->all();

        $student->name  = $response["name"];
        $student->email = $response["email"];
        $student->password = $response["password"];
        $student->address = $response["address"];


        $publicPath = "uploads";
        $image = request()->file("image");
        $image_name = time().$image->getClientOriginalName();
        $image->move($publicPath,$image_name);

        $student->image = $image_name;
        $student->update();

        return to_route("students");
    }


}
