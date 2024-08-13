<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    function saveImage($request){
        if ($request->hasfile("image")) {
            # code...
            $image=$request->file("image");

            $publicPath=public_path("uploads");
            $image_name= time().$image->getClientOriginalName();
            $image->move($publicPath,$image_name);
            $request->image=$image_name;
            return $request->image;
        }
        return null;
    }
    public function index(){
      $courses  = Course::paginate(5);
      return view("course.index",compact("courses"));
    }
    public function destroy(Course $course){
        $course->delete();
        return to_route("course.index");
    }
    public function show(Course $course){
        return view("course.show",compact("course"));
    }
    public function create(){
        return view("course.create");
    }
    public function store(Request $request){
        $request->validate(
           [
            'name'=>'required|unique:courses',
            'total'=>'required',
            'desc'=>'required|unique:courses',

        ]

        );

        $imagePath = $this->saveImage($request);
        $data = $request->all();
        $data["image"]= $imagePath;
        // dd($data);
        // $course = new Course();
        // $course->save($data);
        $course=Course::create($data);

        return to_route("course.store");
    }

    public function edit(Course $course){

        return view("course.edit",compact("course"));
    }

    public function update(Request $request,Course $course){
        $request->validate(
            ["image"=>'required']
        );
        $filePath=public_path("uploads");
        $image_name=$filePath.'/'.$course->image;
        if (File::exists($image_name)) {
            # code...
            File::delete($image_name);
        }


        $data = $request->all();
        $imagePath = $this->saveImage($request);
        $data["image"]= $imagePath;
        $course->name=$data["name"];
        $course->total=$data["total"];
        $course->desc=$data["desc"];
        $course->image=$data["image"];
        $course->save();
        return to_route("course.index");
    }




}



