@extends('test.layout')

@section('main')
    
<h1 class="text-center bg-success mt-5">Floats And Position</h1>

<div class="float-left">Float left</div><br>
<div class="float-right">Float right</div><br>
<div class="float-none">Float none</div><br>
<hr>

<div class="float-sm-right">Float right on small or wider</div><br>
<div class="float-md-right">Float right on small or wider</div><br>
<div class="float-lg-right">Float right on small or wider</div><br>
<div class="float-xl-right">Float right on small or wider</div><br>

<hr>
<div class="float-sm-left">Float right on small or wider</div><br>
<div class="float-md-left">Float right on small or wider</div><br>
<div class="float-lg-left">Float right on small or wider</div><br>
<div class="float-xl-left">Float right on small or wider</div><br>

<hr>
<div class="float-sm-none">Float right on small or wider</div><br>
<div class="float-md-none">Float right on small or wider</div><br>
<div class="float-lg-none">Float right on small or wider</div><br>
<div class="float-xl-none">Float right on small or wider</div><br>
<hr>

<div class="clearfix ">
    <button class="btn btn-primary float-left">Float Left</button>
    <button class="btn btn-success float-right">Float Right</button>
</div>
<h3 class="fixed-top">Fixed Top</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<hr>

<h3 class="sticky-top">Sticky</h3>
<p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<hr>
<h3 class="fixed-bottom">Fixed Bottom</h3>


@endsection