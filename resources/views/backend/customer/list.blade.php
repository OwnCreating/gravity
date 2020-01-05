@extends('backend.layouts.template')

@section('title', 'Customer List')

@section('content')

<div class="container">
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
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($customers as $customer)

                        @if ($customer->name!=="codex")
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$customer->name}}</td>
                            <td class="text-nowrap d-flex justify-content-center">
                                <a href="#" data-toggle="tooltip" data-original-title="Edit">
                                    <input type="button" class="btn btn-outline-warning btn-sm" value="edit"></a>
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
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
