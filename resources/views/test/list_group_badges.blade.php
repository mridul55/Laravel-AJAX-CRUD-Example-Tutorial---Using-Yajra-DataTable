@extends('test.layout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('main')


<h1 class="display-3 text-center my-4">List Group & Badges</h1>

<div class="list-group">
    <ul class="list-group">
        <li class=list-group-item>List Item One</li>
        <li class=list-group-item>List Item One</li>
        <li class=list-group-item>List Item One</li>
        <li class=list-group-item>List Item One</li>
        <li class=list-group-item>List Item One</li>
        

    </ul>

</div>

<div class="list-group">
    <ul class="list-group">
        <a class="list-group-item action" href="">My List One</a>
        <a class="list-group-item" href="">My List One</a>
        <a class="list-group-item" href="">My List One</a>
        <a class="list-group-item" href="">My List One</a>

        

    </ul>

</div>

<ul class="list-group">
    <li class="list-group-item list-group-item-action list-group-item-parimary">List Item</li>
</ul>

<ul class="list-group">
    <li class="list-group-item">My Item One</li>
    <li class="list-group-item">My Item two <span class="badge badge-info align-top">23</span></li>

</ul>

<div class="list-group">
    <a href="" class="list-group-item list-group-action active ">
        <div class="d-flex">
            <h5>My Post One</h5>
            <small>3 days ago</small>
        </div>
        <p class="mb-1"> <div class="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus, labore explicabo voluptatibus neque non praesentium beatae in. Ea illum consequuntur molestiae, quas corrupti est. Asperiores esse cumque exercitationem quae!</div></p>
        <small>By Mosiur</small>
    </a>
</div>
<br><br>

<ol class="breadcrumb">
    <li class="breadcrumb-item active">Home</li>
</ol>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
</ol>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item active"><a href="">User</a></li>
</ol>


@endsection