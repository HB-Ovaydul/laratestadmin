<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\admin\teacher;
use App\Http\Controllers\Controller;

class teachercontroller extends Controller
{
    /**
     * All teacher
     */
    public function index()
    {
       $all_teacher = teacher::all();
        return view('admin.teacher.index',[
           'all_teacher'         => $all_teacher,
        ]);

    }

/**
 * teacher Create
 */
    public function create()
    {
        return view('admin.teacher.create');
    }

/**
 * teacher Store
 */
    public function store(Request $request)
    {
       //Validate 
       $this->validate($request,[
          'name'     => 'required',
          'email'     => 'required|email|unique:teachers',
          'cell'     => 'required|starts_with:+880,01,07,+964|unique:teachers',
           ],[
             'name.required'           => 'Enter Your Name',
             'email.required'           => 'Enter Your Email',
             'cell.required'           => 'Enter Your Phone',
           ]);


     if($request -> hasFile('photo')){
         $img = $request -> file('photo');
         $file_name = md5(time().rand()) .'.'. $img -> clientExtension();
         $img -> move(storage_path('app/public/teacher_img/'), $file_name);
     }else{
      $file_name = null;
     }

      teacher::create([
          'name'         => $request -> name,
          'email'        => $request -> email,
          'cell'         => $request -> cell,
          'username'     => $request -> username,
          'department'   => $request -> department,
          'gender'       => $request -> gender,
          'photo'        => $file_name,
          'courses'      => json_encode($request -> courses),
       ]);

      

       return back() -> with('success', 'Accound Created Successful!');
       
    }
/**
 * teacher Single Profile
 */
    public function show($id)
    {
      $teacher_data = teacher::findOrFail($id);
       return view('admin.teacher.show', [
          'teacher_data'      => $teacher_data,
       ]);
    }
/**
 * teacher Edit Data
 */
    public function edit($id)
    {
       return view('admin.teacher.edit');
    }
/**
 * Student Update Data
 */
    public function update(Request $request,$id)
    {
       //
    }
/**
 * teacher Delete Data
 */
    public function destroy($id)
    {
       //
    }
}
