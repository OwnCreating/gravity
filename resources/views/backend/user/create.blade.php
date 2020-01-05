@extends('backend.layouts.template')

@section('title', 'Role Create')

@section('content')
    
<section class="col-md-8 offset-md-2">
    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">Role User Assign</h4>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="col-md-12 alert alert-success text-center">
                    {{session('status')}}
                </div>
            @endif
            
            <form method="post" action="{{route('assign.store', $user->id)}}">
                @csrf
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        name="name" value="{{ $user->name }}" placeholder="name" required>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email" value="{{ $user->email }}" placeholder="email">
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="role">Roles</label>
                      <select multiple class="custom-select {{ $errors->has('role') ? ' is-invalid' : '' }}"
                        name="role[]"  required>
                          @foreach ($roles as $role)
                              <option value="{{$role->id}}"
                                @if (in_array($role->name, $selectedRoles))
                                    disabled
                                @endif
                                >{{$role->name}}</option>
                          @endforeach
                        
                      </select>
                    {{-- <input type="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}"
                        role="role" value="{{ old('role') }}" placeholder="role" required> --}}
                    @if ($errors->has('role'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('role') }}</strong>
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