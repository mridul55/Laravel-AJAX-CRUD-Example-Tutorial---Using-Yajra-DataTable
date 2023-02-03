  <!-- Modal -->
  <div class="modal fade ajax-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="ajaxForm" class="ajaxForm" method="post" action="{{ route('cat.store') }}" >
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
             <input type="hidden" name="cat_id" id="cat_id">
                <div class="form-group mb-3">
                  <label for="">Name</label>
                  <input type="text" name="name" id="name" class="form-control">
                  <span id="nameError" class="text-danger error-msg"></span>
                </div>
      
                <div class="form-group mb-1">
                  <label for="">Type</label>
                  <select  name="type" id="type" class="form-control">
                      <option disabled selected> choise option</option>
                      <option value="electronic">Electronic</option>
                  </select>
                  <span id="typeError" class="text-danger error-msg"></span>
                </div>
      
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveBtn"></button>
              </div>
            </div>
          </div>
    </form>
  </div>

