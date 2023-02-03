<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Ajax </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
    <div class="row mt-4">
        <div class="col-md-6 offset-3 text-center mt-5">
            <h1>Student Form Table</h1>
            
        </div>
      <div class="row">
        <table>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
            </tr>
        </table>
        {{-- <script>
            $(document).ready(function(){

                $.ajax({
                    type:"GET",
                    url: "{{ route('student.update') }}",
                    success: function(data){
                       console.log(data);
                    },
                    error:function(err){
                        console.log(err.responseText);
                    }
                })
            })
        </script> --}}
      </div>
    </div>          
</div>

</body>
</html>