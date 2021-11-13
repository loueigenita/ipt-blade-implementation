@extends('layouts.app')

@section('content')

<h1 class ='text-center'>MY APPLICATION</h1>
<div class="container d-flex align-items-center justify-content-center mt-5">
<div class="card" style="width: 18rem;">
     <div class="card-body">
        <h5 class="card-title">Units</h5>
         <p class="card-text">Want to see the units. Click Go to continue.</p>
         <a href="/units" class="btn btn-primary">Go</a>
      </div>
    </div>
 <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Categories</h5>
        <p class="card-text">Want to see the categories. Click Go to continue.</p>
        <a href="/categories" class="btn btn-primary">Go</a>
      </div>
     </div>
 <div class="card" style="width: 18rem;">
   <div class="card-body">
       <h5 class="card-title">Merchandices</h5>
       <p class="card-text">Want to see merchandices. Click Go to continue.</p>
       <a href="/merchandices" class="btn btn-primary">Go</a>
    </div>
</div>
@endsection
