<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview(){

        return view('admin.add_doctor');
    } 

public function upload(Request $request)
{
    // Debug (tạm bật khi cần kiểm tra)
    // return response()->json($request->all());
    
    $doctor = new Doctor;
    
    // Lấy thông tin từ form
    $doctor->name = $request->name;
    $doctor->phone = $request->phone;
    $doctor->dichvu = $request->dichvu;
    $doctor->room = $request->room;

    // Xử lý file ảnh (đổi 'file' -> 'image' để trùng Postman)
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('doctorimage', $imagename);
        $doctor->image = $imagename;
    }

    $doctor->save();

    return response()->json([
        'success' => true,
        'message' => 'Thêm bác sĩ thành công!',
        'data' => $doctor
    ]);
}



    public function showappointment(){
        

        $data=appointment::all();

        return view('admin.showappointment', compact('data'));

    }

    public function approved($id)
{
    $data = \App\Models\Appointment::find($id);

    if ($data) {
        $data->status = 'Đã xác nhận';
        $data->save();
    }

    return redirect()->back()->with('message', 'Đã xác nhận lịch hẹn thành công');
}

public function canceled($id)
{
    $data = \App\Models\Appointment::find($id);

    if ($data) {
        $data->status = 'Đã hủy';
        $data->save();
    }

    return redirect()->back()->with('message', 'Đã hủy lịch hẹn thành công');
}

    public function showdoctor(){

        $data = doctor::all();

        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id){

        $data=doctor::find($id);

        $data->delete();

        return redirect()->back();

    }

    public function updatedoctor($id){

        $data = doctor::find($id);


        return view('admin.update_doctor', compact('data'));

    }

    public function editdoctor(Request $request, $id){

        $doctor = doctor::find($id);

        $doctor->name = $request->name;

        $doctor->phone = $request->phone;

        $doctor->dichvu = $request->dichvu;

        $doctor->room = $request->room;

        $image = $request->file;

        if($image){

            $imagename = time().'.'.$image->getClientoriginalExtension();

            $request->file->move('doctorimage', $imagename);

            $doctor->image = $imagename;

        }



        $doctor->save();

        return redirect()->back()->with('massage', 'Updated Thành Công ');

    }
public function getDoctors()
{
    $doctors = \App\Models\Doctor::all()->map(function ($doctor) {
        return [
            'id' => $doctor->id,
            'name' => $doctor->name,
            'phone' => $doctor->phone,
            'dichvu' => $doctor->dichvu,
            'room' => $doctor->room,
            'image' => $doctor->image,
        ];
    });

    return response()->json([
        'success' => true,
        'data' => $doctors
    ], 200, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}
    



public function updateDoctorApi(Request $request, $id)
{
    $doctor = Doctor::findOrFail($id);

    // Debug nếu cần
    // return response()->json($request->all());

    // Gán giá trị (chỉ khi có trong request)
    if ($request->has('name'))   $doctor->name = $request->input('name');
    if ($request->has('phone'))  $doctor->phone = $request->input('phone');
    if ($request->has('dichvu')) $doctor->dichvu = $request->input('dichvu');
    if ($request->has('room'))   $doctor->room = $request->input('room');

    // Xử lý ảnh nếu có
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/img/doctors'), $filename);
        $doctor->image = $filename;
    }

    $doctor->save();

    return response()->json([
        'success' => true,
        'message' => 'Cập nhật bác sĩ thành công!',
        'data' => $doctor
    ]);
}



}