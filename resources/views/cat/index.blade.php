@extends('cat.layout.layouts')
@section('main')
<div class="row">
    <div class="col-md-6 offset-3 text-center mt-5">
      <h1>Create Category By Yajra</h1>
      <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#exampleModal" id="add_category">Add Category</a>
  </div>
  <div class="col-sm-12">
    <table id="cat-table" class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
         
        </tbody>
      </table>
  </div>
  
  </div>
@endsection
