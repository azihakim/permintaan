
<!-- Modal -->
<div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
          <div class="col-sm-6">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          </div>
          <div class="col-sm-6">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
      <div class="modal-body">
        {{-- {{ $item->jenis_permintaan }} --}}
        <form method="POST" action="{{ url('pembayaran/' . $item->id) }}" enctype="multipart/form-data">
          @method('PATCH')
          @csrf
              <div id="bill">
                  <div class="spacer-15"></div>
                  <div class="row">
                      <div class="col-sm-3">
                          <label>Bill pembayaran</label>
                      </div>
                      <div class="col-sm-7">
                          <div class="file-bar">
                              <a href="{{ asset('store/documen/' . $item->respon_bill) }}" target="_blank">
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
                          <input type="hidden" name="old_bill" value="{{ $item->respon_struk }}">
                          <input type="file" name="respon_struk">
                      </div>
                  </div>
              </div>
  
              {{-- <div class="spacer-15"></div>
              <div class="row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-7">
                      <button type="submit" class="btn btn-default pull-left">Kirim</button>
                  </div>
              </div> --}}
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
