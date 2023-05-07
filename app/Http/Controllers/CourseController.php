<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index() {
        $courses = Course::all();
        return view("courses.index", [
            'courses' => $courses
        ]);
    }

    public function store(Request $request) {
        // yellow, any chance to pass the attribute in constructor directly?
        $course = new Course();
        $course->name = $request->input('name');
        $course->save();
        return redirect()->back()->with(['status' => "$course->name saved at id #$course->id"]);
    }

    public function update(Request $request) {

    }

    public function destroy(Request $request) {

    }
}
