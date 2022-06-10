<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class teachercontroller extends Controller
{
    /**
     * All teacher
     */
    public function index()
    {
        return view('admin.teacher.index');
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
       return $request;
    }
/**
 * teacher Single Profile
 */
    public function show($id)
    {
       return view('admin.teacher.show');
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
