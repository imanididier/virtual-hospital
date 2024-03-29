<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appoint;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {

        
        $doctor = doctor::all();
        return view('user.home',compact('doctor'));
    }
    }
        public function appointment(Request $request)
    {
        $data = new appoint;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone =$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';
        
        if(Auth::id())
        {

        $data->user_id=Auth::user()->id;
        
        }
        $data->save();
        return redirect()->back()->with('message','Appointment request succesful .We will contact you soon');
    }
    public function myappointment()
    {
        if(Auth::id())
        {
        $userid=Auth::user()->id;
        $appointer=appoint::where('user_id',$userid)->get();
        
        return view('user.my_appointment',compact('appointer'));
        }
        else
        {
            return redirect()->back();
        }
    }
    public function cancel_appoint($id)
    
    {
       $data=appoint::find($id);
       $data->delete();
       return redirect()->back();
    }
    
}
 