@extends('layouts.login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đăng nhập</h3>
                    </div>

                    <div class="panel-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset>


                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Tên, email hoặc số điện thoại" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>



                                <div class="form-group">
                                    <input id="password" placeholder="Mật khẩu" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>



                                <button type="submit" class="btn btn-lg btn-success btn-block">
                                    {{ __('Đăng Nhập') }}
                                </button>




                            </fieldset>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
