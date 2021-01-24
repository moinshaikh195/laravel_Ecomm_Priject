@extends('master')
@section('content')
<div class=" custom-product">
             <div class="col-sm-4">
                <div class="trending-wrapper">
                    <h1>Cart List</h1>
                    <a class= 'btn btn-success' href="/ordernow">Order Now</a><br><br>
                      @foreach ($products as $item)
                      <div class="row searched-item">
                        <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}" >
                        <div class="">
                          <h3>{{$item->name}}</h3>
                          <h3>{{$item->description}}</h3>
                          <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                         </div></a>
                        </div><br><br>
                     @endforeach  
                     <a class= 'btn btn-success' href="/ordernow">Order Now</a><br><br>
     
                    </div>
             </div>
          </div>
@endsection