<div class="modal fade" id="showHasil{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Deskripsi Hasil Tugas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="get">
                    @csrf
                    <div class="mb-3">
                        <label for="soal" class="col mt-3">Soal</label>
                        <input type="text" id="soal" name="soal" value="{{ $row->soal }}" class="col" disabled>
                        
                        <label for="deskripsi_soal" class="col mt-3">Deskripsi Soal</label>
                        <textarea type="text" id="deskripsi_soal" name="deskripsi_soal" class="col" disabled>{{ $row->deskripsi_soal }}</textarea>
                        
                        <label for="deadline" class="col mt-3">Deadline</label>
                        <input type="text" id="deadline" name="deadline" value="{{ $row->deadline }}" class="col" disabled>
                        
                        <label for="" class="col mt-3">Jumlah Tugas Dikumpulkan</label>
                        <input type="text" id="" name="" value="" class="col" disabled>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>