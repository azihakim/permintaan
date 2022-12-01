<div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Pembayaran bill</h4>
          </div>
      <div class="modal-body">
        @if($item->respon_bill != null )
        <form method="POST" action="{{ url('pembayaran/' . $item->id) }}" enctype="multipart/form-data">
          @method('PATCH')
          @csrf
          <div class="row">
            <div class="col-sm-3">
                <label>Bill pembayaran</label>
            </div>
            <div class="col-sm-9">
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
          <div class="spacer-15"></div>
          <div class="row">
            <div class="col-sm-3">
                <label>Struk pembayaran</label>
            </div>
            <div class="col-sm-9">
                <input type="hidden" name="old_bill" value="{{ $item->respon_struk }}">
                <input required type="file" name="respon_struk">
            </div>
        </div>
        {{-- <div class="clear"></div> --}}
        </div>
          <div class="modal-footer">
              <button class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary pull-right">Kirim</button>
          </div>
        </form>
        @elseif($item->respon_bill == null )  
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert"></button>
          <i class="fa fa-exclamation-triangle"></i>Bill belum ada, silahkan hubungi pihak pelayanan
        </div>
        <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
        @endif
        
    </div>
    </div>
</div>
