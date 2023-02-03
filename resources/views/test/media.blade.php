@extends('test.layout')

@section('main')

<style>
    img{
        width: 60px;
        border: 1px solid #999;
    }
</style>

    <h1 class="display-3 text-center my-4">Media Ovject </h1>


  <div class="media">
    <img class="d-flex mr-3" src="https://picsum.photos/seed/picsum/200/300" alt="">

    <div class="media-body" >
        <h5>
            Media Heading
        </h5>
        <p><div class="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab debitis facilis numquam obcaecati amet nisi eum illo architecto deleniti. Praesentium voluptate placeat sapiente quisquam ullam soluta delectus inventore veritatis quae?</div></p>
    </div>
  </div>
  <br>


  <div class="media">
    <img class="d-flex mr-3" src="https://picsum.photos/seed/picsum/200/300" alt="">

    <div class="media-body" >
        <h5>
            Media Heading
        </h5>
        <p><div class="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab debitis facilis numquam obcaecati amet nisi eum illo architecto deleniti. Praesentium voluptate placeat sapiente quisquam ullam soluta delectus inventore veritatis quae?</div></p>
        <div class="media">
            <img class="d-flex mr-3" src="https://picsum.photos/seed/picsum/200/300" alt="">
        
            <div class="media-body" >
                <h5>
                    Media Heading
                </h5>
                <p><div class="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab debitis facilis numquam obcaecati amet nisi eum illo architecto deleniti. Praesentium voluptate placeat sapiente quisquam ullam soluta delectus inventore veritatis quae?</div></p>
            </div>
          </div>
    </div>
  </div>
  <br>

  <div class="media">
    <img class="d-flex mr-3 align-self-end" src="https://picsum.photos/seed/picsum/200/300" alt="">

    <div class="media-body" >
        <h5>
            Media Heading
        </h5>
        <p><div class="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab debitis facilis numquam obcaecati amet nisi eum illo architecto deleniti. Praesentium voluptate placeat sapiente quisquam ullam soluta delectus inventore veritatis quae?</div></p>
    </div>
  </div>
  <hr>
  <ul class="list-unstyled">
   <li class="media-body">
    <img class="d-flex mr-3" src="https://picsum.photos/seed/picsum/200/300" alt="">
    <h5> Media Heading </h5>
        <p><div class="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab debitis facilis numquam obcaecati amet nisi eum illo architecto deleniti. Praesentium voluptate placeat sapiente quisquam ullam soluta delectus inventore veritatis quae?</div></p>
   </li>
  </ul>


@endsection