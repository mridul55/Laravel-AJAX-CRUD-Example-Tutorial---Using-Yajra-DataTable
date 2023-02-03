@extends('test.layout')
@section('main')

<h1 class="display-4 text-center my-4">Input Groups & Addons</h1>
    

<div class="input-group">
   <div class="input-group-prepend">
    <span class="input-group-text">@</span>
</div>
    <input class="form-control" type="text" placeholder="Username">
</div>
<br>
<div class="input-group">
    <input class="form-control" type="text" placeholder="Email Address">
    <div class="input-group-append">
    <span class="input-group-text">@jsdka.com</span>
    </div>
</div>
<br>
<label for="profile-url">Chosse profile URl</label>
<div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text">www.w3school.com</span>
        </div>
</div>
<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">$</span>
    </div>
    <input class="form-control" type="text">
    <div class="input-group-append">
        <span class="input-group-text">.00</span>
    </div>
</div>
<br><br>
<div class="input-group input-group-lg">
    <span class="input-group-text">@</span>
    <input type="text" placeholder="UserName" class="form-control">
</div>

<div class="input-group">
    <div class="input-group-append">
    <span>
        <input type="text" class="form-control">
    </span>
    <input type="text" class="form-control">
</div>
<br>
<div class="input-group">
    <input type="text" class="form-control" placeholder="Search For...">
    <span>
        <button class="btn btn-primary" type="button">Search</button>
    </span>
</div>

<div class="alert alert-success">
    <strong>success</strong> Blog post Address <a href="" class="alert-link"> Check it Out</a>
</div>
<div class="alert alert-warning">
    <strong>Attention</strong>You have a new message <a href="" class="alert-link"></a>
</div>
<div class="alert alert-danger">
<strong>Warning</strong> Please check the log files
<a class="alert-link" href="">Check it out</a>
</div>

<div class="alert alert-danger">
    <h4>There a problem</h4>
    <strong>Error</strong> Databaser update <a href="" class="alert-link" href="#">Check it out</a>
</div>

<div class="alert alert-success alert-dismissable fade show">

<button type="button" class="close" data-dismiss="alert"> 
    <span>&times;</span>
</button>
<strong>Success</strong>Blog post added <a class="alert-link" href="">Check it out</a>
</div>
<br><br>


<div class="progress">
  <div class="progress-bar" style="30%">
   HTML
  </div>
</div>
<br><br>
<div class="progress">
    <div class="progress-bar bg-success" style="width:50%">50%</div>
</div>
<div class="progress">
    <div class="progress-bar" style="width: 75%"></div>
</div>


@endsection