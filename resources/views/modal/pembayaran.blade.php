
<!-- Modal -->
<div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- {{ $item->jenis_permintaan }} --}}
        <form action="">
              <div id="bill">
                  <div class="spacer-15"></div>
                  <div class="row">
                      <div class="col-sm-3">
                          <label>Bill pembayaran</label>
                      </div>
                      <div class="col-sm-7">
                          <div class="file-bar">
                              <a href="{{ asset('store/documen/') }}" target="_blank">
                                  <div class="file-bar-icon">
                                      <i class="fa fa-download"></i>
                                  </div>
                                  <div class="file-bar-info">
                                      <h5>Unduh file</h5>
                                      <span class="label label-default">.pdf</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div id="data">
                  <div class="spacer-15"></div>
                  <div class="row">
                      <div class="col-sm-3">
                          <label>Struk pembayaran</label>
                      </div>
                      <div class="col-sm-9">
                          <input type="file" name="respon_pembayaran">
                      </div>
                  </div>
              </div>
  
              <div class="spacer-15"></div>
              <div class="row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-7">
                      <button type="submit" class="btn btn-default pull-left">Kirim</button>
                  </div>
              </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
