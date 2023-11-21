@extends("layouts.master")

@section("main")
    <main>
    <table>
        <tr>
            <th>MSSV</th>
            <th>Họ và tên</th>
            <th>Lớp</th>
            <th>Năm sinh</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>SĐT</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->student_id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->class }}</td>
                <td>{{ $student->birth_year }}</td>
                <td>{{ $student->gender == 'F' ? 'Nữ' : 'Nam' }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->phone_number }}</td>
            </tr>
        @endforeach
    </table>
    </main>
@stop
