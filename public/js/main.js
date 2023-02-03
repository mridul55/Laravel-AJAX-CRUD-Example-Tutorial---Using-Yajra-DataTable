$.ajaxSetup({
    headers :{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//Create Task
$('#createTaskForm').submit(function(e){
    e.preventDefault();
    let msg = $("#createTaskMsg");
    let input = $('#createTaskForm input[name="name"]');
    let formData = {
         name: $(input).val()
    }
    
    $.ajax({
        type : 'POST',
        url : 'task',
        data: formData,
        success : function(data){
            // request msg clear
            $(msg).html('');
            //input msg clear
            $(input).val('');
            //show success Msg
            $(msg).append('<div class="alert alert-success"> Task Creatd Succesfully <div>');

            //append result
            $('#taskTablebody').prepend(`
            <tr>
            <td>`+ data.id + ` </td>
            <td>`+ data.name + ` </td>
             <td style="width: 150px"> 
                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                <a href="#" class="btn btn-sm btn-danger">Delete</a>
          </td>
          </tr>
          `);
        },
        error: function(error){
            $(msg).html('');
            $(msg).append('<ul id="errormsg" class="alert alert-danger"></ul>')
         $.each(error.responseJSON.errors, function(index, value){
            console.log(value[0]);
            $(msg).find('#errormsg').append( `
            <li> `+ value[0] +` </li>` )
            })
        }
        
    })

})

//Edit Task

$(document).on('click', '.edit', function () {
    let task = $(this).closest('tr').data('id');
    let modal = $('#editTaskForm');

    $.ajax({
        type: 'GET',
        url: `task/${task}/edit`,
        success: function (data) {
            $(modal).find('#editInput').val(data.name);
            $(modal).attr('data-id', data.id);
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('#editTaskForm').submit(function(e){

    e.preventDefault();
    let msg = $("#createTaskMsg");
    let id = $('#editTaskForm').data('id');
    //form data
    let input = $('#editTaskForm #editInput');
    let formData = {
         name: $(input).val()
    }

    console.log(id);

    $.ajax({
        type : 'PUT',
        url : 'task/{task}' +id,
        data: formData,
        success : function(data){
            // request msg clear
            $(msg).html('');
            //input msg clear
            $(input).val('');
            //show success Msg
            $(msg).append('<div class="alert alert-success"> Task Update Succesfully <div>');
            let taskRow = $('#taskTablebody').find('tr[data-id="'+id+'"]');
            $(taskRow).find('td.task-name').text(data.name);

            
        },
        error: function(error){
            $(msg).html('');
            $(msg).append('<ul id="errormsg" class="alert alert-danger"></ul>')
         $.each(error.responseJSON.errors, function(index, value){
            console.log(value[0]);
            $(msg).find('#errormsg').append( `
            <li> `+ value[0] +` </li>` )
            })
        }
        
    })

})
