<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Teacher Ajax </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      </head>
<body>
    <div style="padding: 30px;"></div>
    <div class="container">
        <h2 style="color: red;"></h2>
        <marquee behavior="" direction="">Laravel 8 Curd</marquee>
        <div class="row">
            <div class="col-sm-8">
              <div class="card">
                <div class="card-header">
                    All Teacher
                  </div>
                 
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                 
                  
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
              
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">title</th>
                            <th scope="col">institute</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-header">
                 <span id="addT">Add New Teacher</span> 
                 <span id="uppdateT"> Update Teacher</span>
                  </div>
             
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                 

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" name="name" class="form-control  is-invalid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                         
                            <strong class="text-danger"></strong>  
                      
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">title</label>
                          <input type="text" name="title" class="form-control  is-invalid " id="exampleInputPassword1" placeholder="roll">
                         
                          <strong class="text-danger"></strong>  
                     
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">institute</label>
                            <input type="text" name="institute" class="form-control  is-invalid " id="exampleInputPassword1" placeholder="class">
                          
                            <strong class="text-danger">/strong>  
                      
                          </div>
                     
                        <button type="submit" id="addButton" class="btn btn-primary">Add</button>
                        <button type="submit" id="updateButton" class="btn btn-primary">Update</button>

                      </form>
                </div>
              </div>
            </div>
          </div>
    </div>
    <script>
        $('#addT').show();
        $('#addT').show();

        $('#addButton').show();
        $('#updateButton').hide();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
            }
        })

        function allData(){

          $.ajax({
             type:"GET",
             dataType: 'json',
             url: '{{ route("teacher.index") }}',
             success:function(response){
              //console.log(data);
              var data = ""
                    $.each(response, function(key, value) {
                        data = data + "<tr>"
                        data = data + "<td>" + value.id + "</td>"
                        data = data + "<td>" + value.name + "</td>"
                        data = data + "<td>" + value.title + "</td>"
                        data = data + "<td>" + value.institute + "</td>"
                        data = data + "<td>"
                        data = data + "<button class='btn btn-sm btn-primary mr-2' onclick='editData(" +
                            value.id + ")'>Edit</button>"
                        data = data + "<button class='btn btn-sm btn-danger' onclick='deleteData(" +
                            value.id + ")'>Delete</button>"
                        data = data + "</td>"
                        data = data + "</tr>"
                    })
                    $('tbody').html(data);
             }

          })
        }
        allData();

    </script>
</body>
</html>