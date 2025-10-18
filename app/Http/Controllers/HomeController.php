<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
class HomeController extends Controller
{
    public function redirect()
{
    if (Auth::check()) {
        $user = Auth::user();

        if ($user->usertype == 1) {
            // Admin
            return view('admin.home');
        } else {
            // User thường (0 hoặc null)
            $doctor = Doctor::all();
            return view('user.home', compact('doctor'));
        }
    } else {
        return redirect('/login');
    }
}

    
    public function index(){

        if(Auth::id()){
            return redirect('home');
        }else{

        
        $doctor = doctor::all();

        return view('user.home', compact('doctor'));

        }
    }

    // ham dat lich
      public function appointmentview()
  {
      $doctor = \App\Models\Doctor::all(); // Lấy danh sách bác sĩ từ DB
    return view('user.appointment', compact('doctor'));
  }

    public function appointment(Request $request){
        $data = new appointment;

        $data->name = $request->name;

        $data->doctor = $request->doctor;

        $data->email = $request->email;
        
        $data->date = $request->date;

        $data->phone = $request->number;

        $data->message = $request->message;

        $data->status = 'Chờ xác nhận';

        if(Auth::id()){

            $data->user_id = Auth::user()->id;

        }

        $data->save();

        return redirect()->back()->with('Thông báo','Đặt lịch thành công');

        
    }

    public function lichhen(){

        if(Auth::id()){

            $userid = Auth::user()->id;

            $appoint = appointment::where('user_id', $userid)->get();

            return view('user.lich_hen', compact('appoint'));
        }else{
            return redirect()->back();
        }
        
    }

    public function cancel_appoint($id){

        $data = appointment::find($id);

        $data->delete();

        return redirect()->back();


    }


}