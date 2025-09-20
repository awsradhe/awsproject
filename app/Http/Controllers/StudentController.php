<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request) {
         $data = Student::get()->toArray();
        return view('home',compact('data'));
   }
   public function nextpages(Request $request) {
    return view('nextpages');
   }
   
    public function addData(Request $request) {
        return view('addpage');
    }
    public function addDataPost(Request $request) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile
        ];

        Student::insert($data);
        return redirect()->route('home');
    }
}
