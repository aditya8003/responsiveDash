@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table>
  <caption>Statement Summary</caption>
  <thead>
    <tr>
      <th scope="col">seller id</th>
      <th scope="col">product sku</th>
      <th scope="col">item quantity</th>
      <th scope="col">shipping Cost</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Account">Visa - 3412</td>
      <td data-label="Due Date">04/01/2016</td>
      <td data-label="Amount">$1,190</td>
      <td data-label="Period">03/01/2016 - 03/31/2016</td>
    </tr>
    @if($ar)
 @foreach ($ar as $i => $value)
  <tr>    
        <td>{{get_object_vars(get_object_vars($ar[$i])["_source"])["seller id"]}}</td>
        <td>{{get_object_vars(get_object_vars($ar[$i])["_source"])["product sku"]}}</td>
        <td>{{get_object_vars(get_object_vars($ar[$i])["_source"])["item quantity"]}}</td>
        <td>{{get_object_vars(get_object_vars($ar[$i])["_source"])["shipping Cost"]}}</td>
 </tr>
@endforeach
@endif
  </tbody>
</table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
