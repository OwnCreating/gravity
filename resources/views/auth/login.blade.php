@extends('backend.layouts.template')

@section('title', 'Login')

@section('content')

<div class="container col-md-8 offset-md-2">
    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">Login</h4>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('login')}}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email" value="{{ old('email') }}" placeholder="Email" required>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                    name="password" value="{{ old('password') }}" placeholder="Password"
                        required>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <input type="submit" class="btn btn-primary fa-pull-right" value="Login">
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
    
@endsection