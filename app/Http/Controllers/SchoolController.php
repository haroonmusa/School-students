<?php

namespace App\Http\Controllers;

use App\Models\school;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        $school= School::all();
        return view('main', compact('school'));
    }
    public function create(school $school)
    {
        return view('index');
    }
    public function store(Request $request)
    {
        $request->validate(
        [
            'name'=>'required',
            'email'=>'required|email'
        ]
        );
        // echo"<pre>";
        // print_r($request->all());
        // dd($request);
        $school = new School;
        $school ->name = $request -> name;
        $school ->email = $request -> email;
        $school ->class = $request -> class;
        $school ->section = $request -> section;
        $school ->roll = $request -> roll;
        $school ->save();
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     */
    public function show(school $school)
    {
        //
    }

    public function edit(school $school, $id)
    {
        $school = School::find($id);
        return view('edit', compact('school'));

    }

    public function update(Request $request, school $school, $id)
    {
        $school= School::find($id);
        $school ->name = $request -> name;
        $school ->email = $request -> email;
        $school ->class = $request -> class;
        $school ->section = $request -> section;
        $school ->roll = $request -> roll;
        $school ->update();
        return redirect('/main');

    }
    public function delete(school $school, $id)
    {
        $school->find($id)->delete();
        return redirect()->back();

    }
}
