@extends('backend.layouts.template')

@section('title', 'Role Table')

@section('content')
    
<section class="col-md-10 offset-md-1">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title pt-2">Customer Lists</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        // var_dump($roles[0]);
                        @endphp
                        @foreach ($users as $user)
                        <tr class="text text-justify">
                            <td>{{$i}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td class="text-nowrap d-flex justify-content-center">
                                <a href="{{route('assign.create', $user->id)}}" data-toggle="tooltip" data-original-title="Create">
                                    <input type="button" class="btn btn-outline-warning btn-sm" value="create"></a>
                                <a href="{{route('assign.edit', $user->id)}}" data-toggle="tooltip" data-original-title="Edit">
                                    <input type="button" class="btn btn-outline-warning btn-sm ml-2" value="edit"></a>
                                <form action="#" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-outline-danger btn-sm ml-2" value="delete"
                                        data-toggle="tooltip" data-original-title="delete"></a>
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
        {{ $users->links() }}
    </div>

</section>

@endsection

@section('script')
<script>
    $('document').ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    

    });
</script>
@endsection