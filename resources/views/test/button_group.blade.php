@extends('test.layout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('main')



    <h1 class="display-3 text-center my-4">Button And Button Group </h1>

    <button class="btn btn-primary">Primary</button>
    <button class="btn btn-secondary">secondary</button>
    <button class="btn btn-success">Success</button>
    <button class="btn btn-info">Info</button>
    <button class="btn btn-warning">Warning</button>
    <button class="btn btn-danger">Danger</button>
    <button class="btn btn-link">Link</button>
 
    <hr>
    <a class="btn btn-outline-primary" href="" role="submit">Link</a>
    <button class=" btn btn-outline-info" type="submit">Button</button>
    <input class=" btn btn-outline-info" type="button" value="Input">
    <input class=" btn btn-outline-info" type="submit" value="Submit">
    <input class=" btn btn-outline-info" type="reset" value="Reset">
    <hr>

    <button class="btn btn-primary btn-lg" type="button"><i class="fa fa-user"></i>Large Button</button>
    <button class="btn btn-primary btn-sm" type="button">Small Button</button>
    <br><br>
    <button class="btn btn-primary" type="button">Block Lavel Button</button>
   <hr>
   <button class="btn btn-danger" type="button">Regular Button</button>
   <button class="btn btn-success active" type="button">Active Button</button>
   <button class="btn btn-success disabled" type="button">Disable  Button</button>
   
   <button type="button" class="btn btn-primary btn-toggle" data-toggle="button">Toggle State</button>
   <br><br>

   <div class="dropdown">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
        My Button
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="">Link one</a>
        <a class="dropdown-item" href="">Link Two</a>
        <a class="dropdown-item" href="">Link Three</a>

    </div>
   </div>
   {{-- split Dropdown --}}
   <div class="btn-group">
    <button type="button" class="btn btn-primary">My Button</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="">Link one</a>
        <a class="dropdown-item" href="">Link Two</a>
        <a class="dropdown-item" href="">Link Three</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="">Link Three</a>
    </div>
   </div>
  <hr>
   <div class="btn-group">
    <button class="btn btn-secondary" type="button">Left</button>
    <button class="btn btn-primary" type="button">Meddile</button>
    <button class="btn btn-secondary" type="button">Right</button>
   </div>
<hr>
<div class="btn-toolbar" role="toolbar">
    <div class="btn-group mr-2">

        <button class="btn btn-primary" type="button">1</button>
        <button class="btn btn-primary" type="button">2</button>
        <button class="btn btn-primary" type="button">3</button>
        <button class="btn btn-primary" type="button">4</button>
        <button class="btn btn-primary" type="button">5</button>

    </div>
    <div class="btn-group">

        <button type="button" class="btn btn-primary">6</button>
        <button type="button">7</button>
    </div>
    <div>
        <button type="button">8</button>
      
    </div>
</div>



@endsection