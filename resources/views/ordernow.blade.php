@extends('master')
@section("content")
<div class="custom-product">
 <div class="col-sm-10">
 <table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delievery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total+10}}</td>
        
      </tr>
    </tbody>
  </table>
  <div class>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form action="/orderplace" method="POST">
  @csrf
    <div class="form-group">
      
      <textarea class="form-control" placeholder="Enter address" name="address"></textarea>
    </div>
    <div class="form-group">
      <label for="pwd">Payment Method</label><br><br>
     <input type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
     <input type="radio" value="cash" name="payment"><span>EMI</span><br><br>
     <input type="radio" value="cash" name="payment"><span>Cash on Delievery</span><br><br>
    </div>
    
    <button type="submit" class="btn btn-default">Order Now</button>
  </form>
</div>

</body>
</html>

  </div>
 </div>
 </div>
@endsection
