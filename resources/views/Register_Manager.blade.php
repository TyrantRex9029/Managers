@extends('layout_user')
@section('title_user')
    สร้างสมาชิก
@endsection
@section('content_user')
    <h2 class="py-2">สร้างสมาชิก</h2>
    <form method="POST" action="/insert">
        @csrf
        <div class="input-group py-2">
            <span class="input-group-text">ชื่อ</span>
            <input type="text" name="Name" class="form-control">
            <span class="input-group-text">นามสกุล</span>
            <input type="text" name="Lastname" class="form-control">
        </div>
        @error('Name')
            <span class="text text-danger">{{ $message }}</span>
        @enderror
        @error('Lastname')
            <span class="text text-danger">{{ $message }}</span>
        @enderror
        <div class="input-group py-2">
            <span class="input-group-text">เบอร์โทร</span>
            <input type="text" name="Tel" class="form-control">
            <span class="input-group-text">อีเมล</span>
            <input type="text" name="Email" class="form-control">
        </div>
        @error('Tel')
            <span class="text text-danger">{{ $message }}</span>
        @enderror
        @error('Email')
            <span class="text text-danger">{{ $message }}</span>
        @enderror
        <div class="input-group py-2">
            <span class="input-group-text">ที่อยู่</span>
            <input type="text" name="Address" class="form-control">
        </div>
        @error('Address')
            <span class="text text-danger">{{ $message }}</span>
        @enderror
        <div class="input-group py-2">
            <label class="input-group-text" for="Dis">อำเภอ</label>
            <select name="Dis" class="form-select" id="Dis">
                <option selected>กรุณาเลือก</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <label class="input-group-text" for="City">จังหวัด</label>
            <select name="City" class="form-select" id="City">
                <option selected>กรุณาเลือก</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="input-group py-2">
            <span class="input-group-text">รหัสไปรษณีย์</span>
            <input type="text" name="Code" class="form-control">
            <span class="input-group-text">รหัสผ่าน</span>
            <input type="password" name="Password" class="form-control">
        </div>
        @error('Code')
            <span class="text text-danger">{{ $message }}</span>
        @enderror
        @error('Password')
            <span class="text text-danger">{{ $message }}</span>
        @enderror
        <div><input type="submit" value="บันทึก" class="btn btn-primary"></div>
    </form>
@endsection
