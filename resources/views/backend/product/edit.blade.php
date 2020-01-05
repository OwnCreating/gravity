@extends('backend.layouts.template')

@section('title', 'Edit Product')

@section('content')
<section>
    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">Product Edit Form</h4>
        </div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success text-center">
                {{session('status')}}
            </div>
            @endif
            @php
                // echo $product;
            @endphp
            <form method="post" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                        value="{{ $product->name }}" placeholder="name" required>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <select type="brand" class="form-control {{ $errors->has('brand') ? ' is-invalid' : '' }}"
                        name="brand" value="{{ $product->brand }}" placeholder="brand" required>
                        {{-- <option value="">Choose...</option> --}}
                        <option value="1">I Phone</option>
                        <option value="2">Samsung</option>
                        <option value="3">Mi</option>
                    </select>
                    @if ($errors->has('brand'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('brand') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="model">Model</label>
                    <select type="model" class="form-control {{ $errors->has('model') ? ' is-invalid' : '' }}"
                        name="model" value="{{ $product->model }}" placeholder="model" required>
                        {{-- <option value="">Choose...</option> --}}
                        <option value="1">X</option>
                        <option value="2">8</option>
                        <option value="3">7 Plus</option>
                    </select>
                    @if ($errors->has('model'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('model') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="photos">Photo</label>
                    <input type="hidden" name="oldfile[]" id="photos" value="{{$product->photos}}">
                    <input type="file" class="form-control-file {{ $errors->has('photos') ? ' is-invalid' : '' }}"
                        name="photos[]"  value="{{ old('photos[]') }}" autocomplete="photos" multiple>
                        <span>
                            <div class="mt-3" id="oldpht">
                                @foreach (unserialize($product->photos) as $photo)
                                
                                    <img src="{{$photo}}" width="100px" width="150px" alt="">
                                
                                @endforeach
                                <img src="{{asset('back/images/delete.png')}}" class="m-2 ml-5" width="25px" height="25px" id="btn-photodel" alt=""><span class="text text-capitalize text-danger"></span>

                            </div>
                        </span>
                    @if ($errors->has('photos'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('photos') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                        name="price" value="{{ $product->price }}" placeholder="price" required>
                    @if ($errors->has('price'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="description"
                        class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description"
                        value="{{ old('description') }}" rows="6" required>{{ $product->description }}</textarea>
                    @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>
                <input type="submit" class="btn btn-primary fa-pull-right" value="Update">
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('script')
    
<script type="text/javascript">
    $('document').ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#btn-photodel').click(function() {
            var photo = $("#photos").val();
            $('#oldpht').hide();
            console.log(photo);
            $.post("{{route('product.photo')}}", {photo, photo}, function(response) {
                console.log(response);
                // alert(response);
            })
        })
    })
</script>

@endsection
