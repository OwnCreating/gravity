@extends('backend.layouts.template')

@section('title', 'Role Create')

@section('content')
    
<section class="col-md-8 offset-md-2">
    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">Role Create Form</h4>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('role.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Role Name</label>
                    <input type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        name="name" value="{{ old('name') }}" placeholder="name" required>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <input type="submit" class="btn btn-primary fa-pull-right" value="Create">
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</section>

@endsection