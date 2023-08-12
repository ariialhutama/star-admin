<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog" role="document">
        <form action="" method="post">
            @csrf
            @method('post')
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah kategori</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_kategori" class="col-md-3 col-md-offset-1 control-label">Nama Kategori</label>
                        <div class="col-md-8">
                            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required
                                autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-light btn-lg">Close</button>
                    <button type="submit" class="btn btn-primary btn-lg text-white">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
