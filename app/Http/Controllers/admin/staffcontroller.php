<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class staffcontroller extends Controller
{
    /**
     * All Student
     */
    public function index()
    {
        return view('admin.staff.index');
    }

/**
 * Student Create
 */
    public function create()
    {
        return view('admin.staff.create');
    }

/**
 * Student Store
 */
    public function store(Request $request)
    {
       return $request;
    }
/**
 * Student Single Profile
 */
    public function show($id)
    {
       return view('admin.staff.show');
    }
/**
 * Student Edit Data
 */
    public function edit($id)
    {
       return view('admin.staff.edit');
    }
/**
 * Student Update Data
 */
    public function update(Request $request,$id)
    {
       //
    }
/**
 * Student Delete Data
 */
    public function destroy($id)
    {
       //
    }
}
