<div class="modal" tabindex="-1" id="modalStatus{{ $id }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

                {{ $id }}
                <h5 class="modal-title">Ganti Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body cari-kos-inputfield">
                <form action="{{ route("admin.$service.changeStatus",$id) }}" method="post">
                @method('put')
                @csrf
                <input type="radio" class="btn-check" name="status" id="s-pending{{ $id }}" value="1" {{$value == '1'? 'checked' : ''}}>
                <label class="btn btn-outline-warning d-block" for="s-pending{{ $id }}"><span class="fw-bold">Pending</span></label>
                <input type="radio" class="btn-check" name="status" id="s-progress{{ $id }}" value="2" {{$value == '2'? 'checked' : ''}}>
                <label class="btn btn-outline-primary d-block" for="s-progress{{ $id }}"><span class="fw-bold">On Progress</span></label>
                <input type="radio" class="btn-check" name="status" id="s-cancel{{ $id }}" value="5" {{$value == '5'? 'checked' : ''}}>
                <label class="btn btn-outline-danger d-block" for="s-cancel{{ $id }}"><span class="fw-bold">Canceled</span></label>
                <input type="radio" class="btn-check" name="status" id="s-payment{{ $id }}" value="4" {{$value == '4'? 'checked' : ''}}>
                <label class="btn btn-outline-secondary d-block" for="s-payment{{ $id }}"><span class="fw-bold">Waiting For Payment</span></label>
                <input type="radio" class="btn-check" name="status" id="s-finish{{ $id }}" value="3" {{$value == '3'? 'checked' : ''}}>
                <label class="btn btn-outline-success d-block" for="s-finish{{ $id }}"><span class="fw-bold">Finished</span></label>
            </div>
            <div class="form-floating m-3">
                <input type="text" name="description" class="form-control" id="keterangan{{ $id }}" placeholder="Keterangan" value="{{ $desc }}">
                <label for="keterangan">Keterangan</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>