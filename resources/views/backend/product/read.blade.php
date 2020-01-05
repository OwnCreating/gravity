@extends('backend.layouts.template')

@section('title', 'Product List')

@section('content')
    
<section>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title pt-2">Product Lists</h4>
            @if (session('status'))
                <div class="alert alert-success text-center text-small">
                        {{session('status')}}
                    </span>
                </div>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Photo</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        // var_dump($roles[0]);
                        @endphp
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->brand_id}}</td>
                            <td>{{$product->model_id}}</td>
                            <td>
                                @foreach (unserialize($product->photos) as $photo)
                                    <img src="{{$photo}}" class="" width="130px" height="150px" alt="">
                                @endforeach
                            </td>
                            <td class="text-nowrap d-flex justify-content-around">
                                <a href="{{route('product.edit', $product->id)}}" data-toggle="tooltip" data-original-title="Edit">
                                    <input type="button" class="btn btn-outline-warning btn-sm ml-2" value="edit"></a>
                                <form action="{{route('product.destroy', $product->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-outline-danger btn-sm ml-2" value="delete" id="btn-delete"
                                        data-toggle="tooltip" data-original-title="delete" onclick="return confirm('Are You Sure?')"></a>
                                </form>
                            </td>
                        </tr>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
    
@endsection

@section('script')

{{-- <script>
    $('document').ready(function() {

        $("#btn-delete").click(function() {
            var result = confirm("Are You Sure");
            if(result) {
                alert('Yes');
            }
            else {
                alert('No');
            }
        })
    })
</script> --}}
    
@endsection