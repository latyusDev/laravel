<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ValidationController extends Controller{
   public function showform() {
      return view('login');
   }

   public function createStudent(Request $request) {
      // dd($request->all());
      $formFields = $request->validate([
        'first_name' => 'required|min:5',
        'last_name' => 'required|min:5|max:50',
        'birth' => 'required',
        'password' => 'required',
        'email' => ['required', 'email', Rule::unique('students', 'email')]
      ]);
      // ['required', 'email', Rule::unique('users', 'email')]
      $formFields['password'] = bcrypt($formFields['password']);
      Student::create($formFields);
      return redirect('/students');
   }
  
   public function showStudent(){
      return view('student', ['students' =>  Student::latest()->simplePaginate(4)]);
   }

   public function destroy(Student $student){
      $student->delete();
      return redirect('students')->with('message', 'student record deleted successfully');
   }

   public function showUpdateForm(Student $student){
      return view('update', ['student' => $student]);
   }

   public function update(Request $request, Student $student){
      $formFields = $request->validate([
         'first_name' => 'required|min:5',
         'last_name' => 'required|min:5|max:50',
         'birth' => 'required',
         'password' => 'required',
         'email' => 'required'
       ]);
       // ['required', 'email', Rule::unique('users', 'email')]
       $formFields['password'] = bcrypt($formFields['password']);
       $student->update($formFields);
       return back()->with('message', 'student record updated successfully');
    }
   
}