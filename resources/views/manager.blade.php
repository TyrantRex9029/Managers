@extends('layout_user')
@section('title_user')
    รายชื่อสมาชิกทั้งหมด
@endsection
@section('content_user')
    <h2 class="py-2">รายชื่อสมาชิกทั้งหมด</h2>
    <form class="d-flex py-2" role="search">
        <input class="form-control me-2" type="search" placeholder="ค้นหา" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">ค้นหา</button>
    </form>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">ชื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">เบอร์โทร</th>
                <th scope="col">อีเมล</th>
                <th scope="col">ที่อยู่</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Data_Manager as $item)
                <tr>
                    <td>{{$item->Name}}</td>
                    <td>{{$item->Lastname}}</td>
                    <td>{{$item->Tel}}</td>
                    <td>{{$item->Email}}</td>
                    <td>{{$item->Address}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$Data_Manager->links()}}
@endsection
