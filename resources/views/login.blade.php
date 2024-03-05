@extends('layout_login')
@section('title_login')
    ระบบล็อกอิน
@endsection
@section('content_login')
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-md-8 py-5">
                <div class="card ">
                    <div class="card-header py-2">ระบบล็อกอิน</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row py-1">
                                <label for="Email" class="col-md-4 col-form-label text-md-right">อีเมล</label>
    
                                <div class="col-md-6  py-1">
                                    <input id="Email" type="Email" class="form-control @error('Email') is-invalid @enderror" name="Email" value="{{ old('Emaill') }}" required autocomplete="email" autofocus>
    
                                    @error('Email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row  py-1">
                                <label for="Password" class="col-md-4 col-form-label text-md-right">รหัสผ่าน</label>
    
                                <div class="col-md-6  py-1">
                                    <input id="Password" type="Password" class="form-control @error('Password') is-invalid @enderror" name="Password" required autocomplete="current-password">
    
                                    @error('Password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0 py-1">
                                <div class="col-md-8 offset-md-4 py-1">
                                    <button type="submit" class="btn btn-primary">
                                        ล็อกอิน
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
