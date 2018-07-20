@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Product</a> <a href="#" class="current">View Product</a> </div>
        <h1>Product</h1>
        @if(Session::has('flash_message_error'))      
      <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert"></button>
              <strong>{!! session('flash_message_error') !!}</strong> 
      </div>
       @endif 
  @if(Session::has('flash_message_success'))      
      <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert"></button>
              <strong>{!! session('flash_message_success') !!}</strong> 
      </div>
  @endif
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>View Product</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>Product ID</th>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Product Name</th>
                    <th>Product Code</th>
                    <th>Product Color</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                  <tr class="gradeX">
                    <td class="center">{{$product->id}}</td>
                    <td class="center">{{$product->category_id}}</td>
                    <td class="center">{{$product->category_name}}</td>
                    <td class="center">{{$product->product_name}}</td>
                    <td class="center">{{$product->product_code}}</td>
                    <td class="center">{{$product->product_color}}</td>
                    <td class="center">{{$product->price}}</td>
                  <td>
                    @if(!empty($product->image))
                    <img src="{{ asset('/images/backend_images/products/small/'. $product->image)}}" style="width:50px">
                    @endif
                  </td>
                    <td class="center"><a href="{{url('/admin/edit-product/'. $product->id)}}" class="btn btn-primary btn-mini">Edit</a> <a id="delPro" href="{{url('/admin/delete-product/'. $product->id)}}" class="btn btn-danger btn-mini">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection