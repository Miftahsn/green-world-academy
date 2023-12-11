<div class="modal fade" id="tugas{{ $row->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="">
          @csrf
          <div class="mb-3">
            <label for="link">Link</label> 
            <input type="text" class="form-control" name="id" id="link" value="{{ $row->link }}">
          </div>
          <div class="mb-3">
            <label for="kendala">Kendala</label> 
            <input type="text" class="form-control" name="id" id="kendala" value="{{ $row->kendala }}">
          </div>
          <input type="hidden" name="id">
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>