@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-6">
        <table class="table table-striped">
            
            <tbody>
              <tr>
                <td>Price</td>
                <td>{{$total}} Ruppess</td>
                
              </tr>
              <tr>
                <td>Tax</td>
                <td>0 ruppess</td>
                
              </tr>
              <tr>
                <td>Delivery Charges</td>
                <td>100</td>
             </tr>
             <tr>
                <td>Total Amount</td>
                <td>{{$total+100}}</td>
                
              </tr>
            </tbody>
          </table>
          <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
              <textarea placeholder="Enter Your Address" name="address"  class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label for="">Payment Method</label>
            <p> <input type="radio"  name="payment"><span> Online Payment</span></p>
            <p> <input type="radio"  name="payment"><span> EMI Payment</span></p>
            <p> <input type="radio"  name="payment"><span>  Payment on Delivery</span></p>
            </div>
            
            <button type="submit" class="btn btn-default">Oder Now</button>
          </form>
    </div>
    </div>    
@endsection