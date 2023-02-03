<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <title>Ajax CURD</title>
  </head>
  <body>
    
    <div class="container">
       @include('cat.create')
       @include('cat.edit')
        @yield('main')
    </div>
   
  </body>

  @include('cat/cat_js')
  <script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      var table =  $('#cat-table').DataTable({
            processing : true,
            ServerSide : true,

            ajax : "{{ route('cat.index') }}",
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'type' },
                { data: 'action', name:'action', orderable:false, searchable:false },
               ]

        });

  $('body').on('click', '.editButton', function(){
       var id = $(this).data('id');
       
       $.ajax({
         url: '{{ url("cat", '') }}' + '/' + id + '/edit',
         method: 'GET',
         success : function(response){
           $('.ajax-modal').modal('show');
           $('#modal-title').html('Edit Category');
           $('#saveBtn').html('Update Category');
 
           $('#cat_id').val(response.id);
           $('#name').val(response.name);
           $('#type').val(response.type);
           $('#type').empty().append('<option selected value="'+response.type+'">'+ response.id+' </option');
            
            console.log(response.type);
 
         }, 
         error: function(error){
           console.log(error);
         }
       });
      })
 

  $(document).ready(function(){ 
      $('#modal-title').html('Create Category');
      $('#saveBtn').html('Submit Category');

       $('#saveBtn').on('click', function(e){
          e.preventDefault();
          
          $('.error-msg').html('');
          var formData = new FormData($('#ajaxForm')[0]);
          //console.log(formData);

          $.ajax({
              url: '{{ route("cat.store") }}',
              method: 'POST',
              processData: false,
              contentType: false,
              cache: false,
              dataType: 'json',
              data:formData,

              success: function(response){
                table.ajax.reload();
                $('#name').val(response.name);
                $('#type').val(response.type);
                $('#cat_id').val(response.cat_id);

                  $('.ajax-modal').modal('hide');
                  if(response){
                      swal("Success!", response.success, "success");
                  }
              },
              error: function(error){
                  if(error){
                      console.log(error.responseJSON.errors.name)
                      $('#nameError').html(error.responseJSON.errors.name);
                      $('#typeError').html(error.responseJSON.errors.type);

                  }
              }

          })
       });

       $('#add_category').click(function(){
        $('#modal-title').html('Create Category');
         $('#save-btn').html('save Category');
       })

       $('body').on('click', '.delBtn',function(){
           var id = $(this).data('id');
           //console.log(id);

            
       $.ajax({
         url: '{{ url("cat.destroy", '') }}' + '/' + id,
         method: 'DELETE',
         success : function(response){
          table.ajax.reload();
          swal("Success!", response.success, "success");
 
         }, 
         error: function(error){
           console.log(error);
         }
       });
           

       });

     

      
 
  });

  
</script>
  @stack('js')
</html>