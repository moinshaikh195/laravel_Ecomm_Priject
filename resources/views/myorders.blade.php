@extends('master')
@section('content')
<div class=" custom-product">
             <div class="col-sm-4">
                <div class="trending-wrapper">
                    <h1>Order List</h1>
                   
                      @foreach ($orders as $item)
                      <div class="row searched-item">
                        <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}" >
                        <div class="">
                          <h3>{{$item->name}}</h3>
                          <h3>{{$item->description}}</h3>
                        </div><br><br>
                     @endforeach  
                     
     
                    </div>
             </div>
          </div>
@endsection