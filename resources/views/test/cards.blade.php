@extends('test.layout')

@section('main')

<h1 class="display-3 text-center my-4">Cards</h1>

<div class="card">
    <div class="card-body">
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nulla eius voluptates odit atque numquam pariatur. Voluptatibus repellendus illo deleniti exercitationem esse aperiam ex tempora incidunt. Iste perspiciatis sequi eius.</div>
    </div>
</div>

<br><br>

<div class="card" style="width: 40%;">
    <img class="card" src="https://picsum.photos/id/300/300" alt="">
    <div class="card-body">
        <h4 class="card-title">Card Title</h4>
        <h6 class="card-subtitle">Card Subtitle</h6>
        <p>Loera aksdjfl aldkfj adlkfjl</p>
        <a class="btn btn-primary" href="" class="Read More">Read more</a>
    </div>
</div>
<br><br>

<div class="card text-center">
    <div class="card-header bg-success">
        <h3>My Card</h3>
    </div>
    <div class="card">
        
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Links</a>
                </li class="nav-item">
                <li>
                    <a class="nav-link" href="">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body">
    <h4>Card Title</h4>
    <p>lorem ipsum sit amet sonsdetir adipisicing elit</p>
    <a class="btn btn-info" href="">Read More</a>
    </div>
    <div class="card-footer text-muted bg-danger">
        2 days ago
    </div>
</div>
<br><br>

<div class="card bg-primary text-light">
    <div class="card-body">
        <h4>Card Title</h4>
        <p>Lorem ipsum dolar amet consectutue</p>
    </div>
</div>
<br>
<div class="card bg-success text-light">
    <div class="card-body">
        <h4>Card Title</h4>
        <p>Lorem ipsum dolar amet consectutue</p>
    </div>
</div>
<br>
<div class="card bg-info text-light">
    <div class="card-body">
        <h4>Card Title</h4>
        <p>Lorem ipsum dolar amet consectutue</p>
    </div>
</div>
<br>
<div class="card bg-danger text-light">
    <div class="card-body">
        <h4>Card Title</h4>
        <p>Lorem ipsum dolar amet consectutue</p>
    </div>
</div>
<br>
<div class="card bg-warning text-dark">
    <div class="card-body">
        <h4>Card Title</h4>
        <p>Lorem ipsum dolar amet consectutue</p>
    </div>
</div>
<br>
<div class="card border-primary">
    <div class="card-body">
        <h4 class="card-title text-primary">Card Title</h4>
        <p class="card-text">Lorem ipsum dolar amet consectutue</p>
    </div>
</div>
<br>
<div class="card border-danger">
    <div class="card-body">
        <h4 class="card-title text-primary">Card Title</h4>
        <p class="card-text">Lorem ipsum dolar amet consectutue</p>
    </div>
</div>
<br>
<div class="card border-info">
    <div class="card-body">
        <h4 class="card-title text-info">Card Title</h4>
        <p class="card-text">Lorem ipsum dolar amet consectutue</p>
    </div>
</div>
<br>
<div class="card-group">
    <div class="card">
        <div class="card-body">
            <h4>Card Title</h4>
            <p>lkjasdfl aslkdj asdlkf kasjd; as;lkdfj</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Card Title</h4>
            <p>Lorem Ipsum dolor sit amet consectetur adiposicing elit Illo quas</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Card Title</h4>
            <p>Lorem Ipsum dolor sit amet consectetur adiposicing elit Illo quas</p>
        </div>
    </div>
</div>


@endsection
