@extends('layouts.layout')

@section('content')

<div>
    <h2>
        Orders Create
    </h2>
    <h1>Orders</h1>

   <form class="row g-3 needs-validation" validate>
     <div class="col-md-4">
       <label for="validationCustom01" class="form-label">order</label>
       <input type="text" class="form-control" id="validationCustom01" required>
     </div>
     <div class="col-md-4">
       <label for="validationCustom02" class="form-label">price</label>
       <input type="number" class="form-control" id="validationCustom02"  required>
     </div>
     <div class="col-12">
       <button class="btn btn-primary" type="submit">Submit form</button>
     </div>
   </form>

</div>

@endsection
