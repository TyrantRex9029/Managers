@extends('layout_user')
@section('title_user')
    ค้นหารายชื่อสมาชิก
@endsection
@section('content_user')
    <h2 class="py-2">ค้นหารายชื่อสมาชิก</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">ชื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">เบอร์โทร</th>
                <th scope="col">อีเมล</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Search as $item)
                <tr>
                    <td>{{$item->Name}}</td>
                    <td>{{$item->Lastname}}</td>
                    <td>{{$item->Tel}}</td>
                    <td>{{$item->Email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$Data_Manager->links()}}
@endsection
