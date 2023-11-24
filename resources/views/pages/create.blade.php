@extends('layouts.master')
@section('main')
    <div class="form-container">
        <form action="/create" method="POST" class="form">
            <div class="heading">Thêm Sinh Viên</div>
            <div class="input-row">
                <label for="student-id">Mã số sinh viên</label>
                <br>
                <input id="student-id" name="student_id" type="text">
                @error('student-id')
                    <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-row">
                <label for="student-name">Họ và tên</label>
                <br>
                <input id="student-name" name="name" type="text">
                @error('student-name')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-row">
                <label for="student-class">Lớp</label>
                <br>
                <input id="student-class" name="class" type="text">
                @error('student-class')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-row">
                <label for="student-birth-year">Năm sinh</label>
                <br>
                <input id="student-birth-year" name="birth_year" type="text">
                @error('student-birth-year')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-row">
                <label for="student-gender">Giới tính</label>
                <br>
                <input type="radio" id="male" value="M" name="gender" checked>
                <label for="male">Nam</label>
                <input type="radio" id="female" value="F" name="gender">
                <label for="female">Nữ</label>
                @error('gender')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-row">
                <label for="student-address">Địa chỉ</label>
                <br>
                <input id="student-address" name="address" type="text">
                @error('student-address')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-row">
                <label for="student-phone-number">Số điện thoại</label>
                <br>
                <input id="student-phone-number" name="phone_number" type="text">
                @error('student-phone-number')
                <span class="msg-error">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn--primary" type="submit">Lưu</button>
        </form>
    </div>
@stop
