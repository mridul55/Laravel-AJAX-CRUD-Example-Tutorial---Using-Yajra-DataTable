@extends('test.layout')

@section('main')
    
<h1 class="display-2 text-center my-5">Sizing</h1>


<div class="bg-success text-white w-25 p-3 mb-3">Width 25%</div>
<div class="bg-success text-white w-50 p-3 mb-3">Width 50%</div>
<div class="bg-success text-white w-75 p-3 mb-3">Width 75%</div>
<div class="bg-success text-white w-100 p-3 mb-3">Width 1005%</div>
<hr>

<div class="bg-success text-white w-25 ">Width 25%</div>
<div class="bg-success text-white w-50 ">Width 50%</div>
<div class="bg-success text-white w-75 ">Width 75%</div>
<div class="bg-success text-white w-100 ">Width 105%</div>

<hr>

<div style="height: 500px; border:1px solid #333;">

    <div class="bg-warning h-25">Height 25%</div>
    <div class="bg-primary h-50">Height 50%</div>
    <div class="bg-info h-25">Height 25%</div>

    

</div>


@endsection