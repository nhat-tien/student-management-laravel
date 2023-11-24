@extends('layouts.master')
@section('main')
    <div class="form-container">
        <form action="/update/{{ $student->student_id }}" method="POST" class="form">
            @method('PUT')
            <div class="heading">Chỉnh sửa thông tin</div>
            <div class="input-row">
                <label for="student-id">Mã số sinh viên</label>
                <br>
                <input id="student-id" name="student_id" type="text" value="{{ $student->student_id }}">
                @error('student_id')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-row">
                <label for="student-name">Họ và tên</label>
                <br>
                <input id="student-name" name="name" type="text" value="{{ $student->name }}">
                @error('name')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-row">
                <label for="student-class">Lớp</label>
                <br>
                <input id="student-class" name="class" type="text" value="{{ $student->class }}">
                @error('class')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-row">
                <label for="student-birth-year">Năm sinh</label>
                <br>
                <input id="student-birth-year" name="birth_year" type="text" value="{{ $student->birth_year }}">
                @error('birth_year')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-row">
                <label for="student-gender">Giới tính</label>
                <br>
                <input type="radio" id="male" value="M" name="gender" @checked($student->gender == 'M')>
                <label for="male">Nam</label>
                <input type="radio" id="female" value="F" name="gender" @checked($student->gender == 'F')>
                <label for="female">Nữ</label>
                @error('gender')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-row">
                <label for="student-address">Địa chỉ</label>
                <br>
                <input id="student-address" name="address" type="text" value="{{ $student->address }}">
                @error('address')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-row">
                <label for="student-phone-number">Số điện thoại</label>
                <br>
                <input id="student-phone-number" name="phone_number" type="text" value="{{ $student->phone_number }}">
                @error('phone_number')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div style="display: flex; flex-direction: row; justify-content: center; gap: 10px;">
                <a class="btn btn--secondary" href="/">Huỷ</a>
                <button class="btn btn--primary" type="submit">Lưu</button>
            </div>
        </form>
    </div>
@stop
