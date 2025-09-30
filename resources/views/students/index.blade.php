<!DOCTYPE html>
<html>

<head>
    <title>Danh sách sinh viên</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    th {
        background: #f2f2f2;
    }
    </style>
</head>

<body>
    <h2>Danh sách sinh viên</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Tuổi</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student['id'] }}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['age'] }}</td>
                <td>{{ $student['status'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>