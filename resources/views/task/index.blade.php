<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <header class="mt-5 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1>Laravel Ajax CURD  </h1>
          </div>
        </div>
      </div>
    </header>
    <section class="body">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="mb-0">All Task</h3>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#createTask">Create Task</a>
                

                <!-- Button trigger modal -->
      
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th style="width: 150px">Action</th>

                    </tr>
                  </thead>
                  <tbody id="taskTablebody">
                    @foreach ( $tasks as $task )
                    <tr data-id="{{ $task->id }}">
                      
                      <td>{{ $task->id }}</td>
                      <td>{{ $task->name }}</td>
                      <td style="width: 150px"> 
                     
                        <a href="" class="btn btn-primary edit" data-toggle="modal" data-target="#editTask">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 

  <!--Create  Modal -->
  <div class="modal fade" id="createTask" tabindex="-1" role="dialog" aria-labelledby="createTaskTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

      <div class="modal-content">
        <form id="createTaskForm">
          <div class="modal-header">
            <h5 class="modal-title" id="createTaskTitle">Create Task</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <div id="createTaskMsg">

            </div>
            <div class="form-group">
              <label for="">Task Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter Task Name">
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Create Task</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
  <!-Edit Modal -->
  <div class="modal fade" id="editTask" tabindex="-1" role="dialog" aria-labelledby="editTaskTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

      <div class="modal-content">
        <form id="editTaskForm">
          <div class="modal-header">
            <h5 class="modal-title" id="editTaskTitle">Edit Task</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <div id="editTaskMsg">

            </div>
            <div class="form-group">
              <label for="">Task Name</label>
              <input type="text" class="form-control" id="editInput" name="name" placeholder="Enter Task Name">
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Task</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js') }}/main.js"></script>
  </body>
</html>