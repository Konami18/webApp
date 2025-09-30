<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    // 📝 Mảng dữ liệu tạm (thay cho DB)
    private $students = [
        ['id' => 1, 'name' => 'Duy', 'age' => 100, 'status' => 'Sinh viên đại học'],
        ['id' => 2, 'name' => 'Lan', 'age' => 20, 'status' => 'Sinh viên cao đẳng'],
    ];

    // 📌 Hiển thị danh sách sinh viên
    public function index()
    {
        // Lấy dữ liệu từ thuộc tính $students
        $students = $this->students;

        // Trả về view 'students.index' và truyền biến $students
        return view('students.index', compact('students'));
    }

    // ➕ Thêm mới (chỉ demo)
    public function add()
    {
        return "Thêm sinh viên mới thành công!";
    }

    // ✏️ Sửa thông tin sinh viên
    public function edit($id)
    {
        return "Sửa thông tin sinh viên có ID = $id";
    }

    // ❌ Xoá sinh viên
    public function delete($id)
    {
        return "Đã xoá sinh viên có ID = $id";
    }
}