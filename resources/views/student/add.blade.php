<div class="row mt-4">
    <div class="col-md-6 offset-3 text-center mt-5">
        <h1>ADD Student </h1>
        
    </div>
    <div class="form-group row col-md-12" >
        <form id="my-form" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-xs-12">
              <label for="exampleInputEmail1">Full Name</label>
              <input type="name" class="form-control" name="name" placeholder="Enter name">
              
            </div>
            <div class="form-group col-xs-12">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="eamil" placeholder="Enter email">
                
            </div>
            <div class="form-group col-xs-6">
                <label for="formFile" name="image" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <div class="form-group col-xs-6">
                <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
            </div>
            
          </form> 
          <span id="output"></span>


          <script>
            $(document).ready(function(){
              $("#my-form").submit(function(e){
                e.preventDefault();

             var form =   $("#my-form")[0];
             var data = new FormData(form);
             $("#btnSubmit").prop("disabled",true);

             $.ajax({
               type: "POST",
               url: "{{ route('student.store') }}",
               data:data,
               processData:false,
               contentType: false,
               success:function(data){
                $("#output").text(data.res);
               $("#btnSubmit").prop("disabled",false);
               },
               error:function(e){
                $("#output").text(e.responseText);
               $("#btnSubmit").prop("disabled",false);

               }
             });

              });
            });
          </script>
    </div>
</div>