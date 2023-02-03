<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Perbarui akun</h4>
        </div>
        <div class="modal-body">
            <div class="inner-padding">
                <form method="POST" action="{{ url('edit-user/' . $user->id) }}">
                    @method('PATCH')
                    @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="bold">Data diri</h4>
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Nama</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" aria-required="true" name="nama" required="" value="" class="form-control">
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Asal instansi</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" aria-required="true" name="instansi" value="" required="" class="form-control">
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Nomor whatsapp</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" aria-required="true" name="no_wa" value="{{ $user->no_wa }}" required="" class="form-control">
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-default pull-right">Perbarui</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
