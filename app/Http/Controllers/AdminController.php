<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appoint;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }
    public function upload(Request $request)
    {
        $doctor=new doctor;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->email=$request->email;
        $doctor->speciality=$request->speciality;

        $doctor->save();
        return redirect()->back()->with('message','Doctor added succesfully');
    }
    public function showappointment()
    {

        $data=appoint::all();
        return view('admin.showappointment',compact('data'));
    }
    public function approved($id)
    {
        $data=appoint::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();
    }
}
