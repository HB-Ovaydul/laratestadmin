<?php

namespace App\Http\Controllers\admin;

use App\Mail\studntmail;
use App\Models\admin\studnt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ConfrimNotification;

class studentcontroller extends Controller
{
    /**
     * All Student
     */
    public function index()
    {
       $student = studnt::all();
        return view('admin.student.index',[
           'all_student'         => $student,
        ]);
    }

/**
 * Student Create
 */
    public function create()
    {
        return view('admin.student.create');
    }

/**
 * Student Store
 */
    public function store(Request $request)
    {
   // Validation
      $this->validate($request,[
         'email'          => 'required|email|unique:studnts',
         'cell'           => 'required|starts_with:+880,01,07,+964,+966,05|unique:studnts',
         'username'       => 'required|min:6|max:10'
      ]);

   //Image Upload
      if($request -> hasFile('photo')){
           $img = $request ->  file('photo');
           $file_name = md5(time().rand()) . '.' . $img -> clientExtension();
           $img -> move(storage_path('app/public/student_photos/'), $file_name);
      }else{
         $file_name = '';
      }
// Data Create
     $student = studnt::create([
         'name'          => $request -> name,
         'email'         => $request -> email,
         'cell'          => $request -> cell,
         'username'      => $request -> username,
         'department'    => $request -> department,
         'gender'        => $request -> gender,
         'courses'        => json_encode($request -> courses),
         'photo'        => $file_name,
      ]);

     // Email Notification
      $data = [
         'name'      => $request -> name,
         'email'      => $request -> email,
         'cell'      => $request -> cell,
         'photo'      => $file_name,

      ];
      
      $student -> notify( new ConfrimNotification($data));
       
       // confrim mail
      
      // Mail::to($request -> email) -> send(new studntmail($data));
      //retrun back
      return back() -> with('success', 'Account Created Successful !');
    }
/**
 * Student Single Profile
 */
    public function show($id)
    {
       $single_student = studnt::findOrfail($id);
       return view('admin.student.show', [
          'single_student'          =>  $single_student,
         
       ]);
    }
/**
 * Student Edit Data
 */
    public function edit($id)
    {
      $student_edit = studnt::findOrFail($id);
       return view('admin.student.edit',[
         'student_edit'          =>  $student_edit,
         'edit_coures'           => ['MERN STACK','PYTHON','PHP','LARAVEL','RECT','JAVA' ],
       ]);
    }

/**
 * Student Update Data
 */
    public function update(Request $request,$id)
    {
       $update = studnt::findOrFail($id);

       if($request -> hasFile('new_photo')){
            $img = $request -> file('new_photo');
            $file_name = md5(time().rand()) . '.' . $img -> clientExtension();
            $img -> move(storage_path('app/public/student_photos'), $file_name);
            unlink('storage/student_photos/' . $update -> photo);
       }else{
         $file_name = $request -> old_photo;
       }

       $update -> update([
          'name'          => $request -> name,
          'email'         => $request -> email,
          'cell'          => $request -> cell,
          'username'      => $request -> username,
          'department'    => $request -> department,
          'gender'        => $request -> name,
          'courses'       => json_encode( $request -> courses),
          'photo'         => $file_name,

       ]);
       return back();
    }
/**
 * Student Delete Data
 */
    public function destroy($id)
    {
         $delete_stu_data = studnt::findOrFail($id);
         $delete_stu_data -> delete();
         return back();

    }
}
