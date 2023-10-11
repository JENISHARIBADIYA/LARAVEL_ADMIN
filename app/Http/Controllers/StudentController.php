<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['students'] = students::all();
        return view('students', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$data['students'] = students::all();
        return view('student_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'dob' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('student_add')
                ->withErrors($validator)
                ->withInput();
        }
        $newstudent = new students();
        $newstudent->firstName = $request->input('firstName');
        $newstudent->middleName     = $request->input('middleName');
        $newstudent->lastName = $request->input('lastName');
        $newstudent->email = $request->input('email');
        $newstudent->phone_no = $request->input('phone_no');
        $newstudent->dob = date('Y-m-d', strtotime($request->input('dob')));
        $newstudent->city = $request->input('city');
        $newstudent->state = $request->input('state');
        $newstudent->country = $request->input('country');
        $newstudent->status = $request->input('status');
        $newstudent->save();
        return redirect('/students')->with('status', 'Data Saved Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currentstudent = Students::find($id);
        $data['current_student'] = $currentstudent;
        return view('student_view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['current_student'] = students::where('id', $id)->get();
        return view('student_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'dob' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('student_edit')
                ->withErrors($validator)
                ->withInput();
        }
        $editstudent = students::find($id);
        $editstudent->firstName = $request->input('firstName');
        $editstudent->middleName = $request->input('middleName');
        $editstudent->lastName = $request->input('lastName');
        $editstudent->email = $request->input('email');
        $editstudent->phone_no = $request->input('phone_no');
        $editstudent->dob = $request->input('dob');
        $editstudent->city = $request->input('city');
        $editstudent->state = $request->input('state');
        $editstudent->country = $request->input('country');
        $editstudent->status = $request->input('status');
        $editstudent->save();
        return redirect('/students')->with('status', 'Data updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $deletestudent = students::find($id);
        $deletestudent->delete();
        return redirect('/students')->with('status', 'Data delted Successfully.');
    }
}
