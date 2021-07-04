
@extends('layouts.app')
@section('content')

    <div class="container" style="margin-top:100px">
        <hr />
        <h1 style="display: inline-block;">Products</h1>
  
        <a href="/admin/products/create" 
        class="btn btn-success float-right">Add Product</a>
        <hr />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">SubTitle</th>
                    <th scope="col">Price</th>
                    <th scope="col" style="width: 350px;">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->subTitle}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        
                        <a href="/admin/products/{{$item->id}}/edit" class="btn btn-outline-primary">Edit</a> |
                        <a href="/admin/products/{{$item->id}}/delet" class="btn btn-danger">Delete</a>
                    </td>
                </tr> 
                @endforeach

            </tbody>
        </table>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2019 Maba</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
        
    @endsection
