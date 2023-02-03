@extends('test.layout');
@section('main')
    <h1 class="display-3 text-center my-4">Forms</h1>

    <form action="">
      <div class="form-group">
        <label for="name" >Name</label>
        <input class="form-control form-control-sm" type="text" id="name" placeholder="Enter name">
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter an Email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" placeholder="Password">
      </div>
      <div class="form-group">
       <label for="gender">Gender</label>
       <select class="form-control" name="genger" id="">
        <option value="">Male</option>
        <option value="">Female</option>
       </select>
      </div>
      <div class="form-group">
        <label for="msg">Message</label>
        <textarea class="form-control" name="text" id="" cols="14" rows="4"></textarea>
      </div>
   <div class="form-group">
    <label for="file">File Input</label>
    <input type="file" class="form-control-file" id="file">
    <small class="form-text text-mute">mx 3mb size</small>
   </div>
   <div class="form-check">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" value="option1" checked> Personal
    </label>
   </div>
   <div class="form-check">
    <label for="" class="form-check-label">
        <input type="radio" class="form-check-input" value="option2">
        Commersial
    </label>
   </div>
   <div class="form-check">
    <label for="" class="form-check-label">
        <input type="checkbox" class="form-check-input"> sign up fot mewslatter
    </label>
   </div>
   <button class="btn btn-primary mt-3" type="submit">Submit</button>  
    </form>

    <br><br>

    <form action="" class="form-inline">
        <input type="text" id="username" class="form-control mr-2" placeholder="Name">
        <input class="form-control" type="text" id="" placeholder="password">
        <div form-check>
            <label class="form-check-label mr-2" for="">
            <input type="checkbox" class="form-check-input">Remember Me</label>

        </div>
        <button class="btn btn-warning" type="submit">Submit</button>
    </form>
    <br><br>
   <div class="form-group">
    <label for="username">username</label>
   <input class="" type="text" id="username">
   </div>

@endsection