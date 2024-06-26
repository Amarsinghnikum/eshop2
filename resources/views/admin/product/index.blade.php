@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Product Page</h4>
        <hr>
    </div>
    <div class="card-body">
    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Selling Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
                @foreach($products as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->category!=''?$item->category->name:''}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->selling_price}}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/products/'.$item->image)}}" class="cate-image" alt="Image here">
                        </td>
                        <td>
                            <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @php $i=$i+1; @endphp
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>
@endsection
