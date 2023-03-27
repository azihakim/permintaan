<div class="modal fade" id="deksripsiModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deksripsiModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Detail</h4>
      </div>
      <div class="modal-body">
        
        <div class="row">
            <div class="col-sm-4">
                <h4 class="bold">Detail user</h4>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-4">
                <label>Role</label>
            </div>
            <div class="col-sm-5">
              @if($item->role == 'Masyarakat')
              <span class='label label-default'>Masyarakat</span>                                    
              @elseif($item->role == 'Super Admin')
              <span class='label label-primary'>Super Admin</span>
              @elseif($item->role == 'Viewer')
              <span class='label label-warning'>Viewer</span>
              @else
              <span class='label label-success'>Admin</span>
              @endif
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-4">
                <label>Nama</label>
            </div>
            <div class="col-sm-5">
              <p>{{ $item->name }}</p>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-4">
                <label>Email</label>
            </div>
            <div class="col-sm-5">
              <p>{{ $item->email }}</p>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-4">
                <label>Asal instansi</label>
            </div>
            <div class="col-sm-5">
              <p>{{ $item->instansi }}</p>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-4">
                <label>Kategori</label>
            </div>
            <div class="col-sm-5">
              <p>{{ $item->kategori }}</p>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-4">
                <label>Deskripsi kategori</label>
            </div>
            <div class="col-sm-5">
              <p>{{ $item->desk_kategori }}</p>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-4">
                <label>Nomor whatsapp</label>
            </div>
            <div class="col-sm-5">
              <p>{{ $item->no_wa }}</p>
            </div>
        </div>
        @if ($item->ktp != null)
          <div class="spacer-10"></div>
          <div class="row">
              <div class="col-sm-4">
                <label>KTP</label>
              </div>
              <div class="col-sm-5">
                <div class="file-bar">
                    <a href="{{ asset('storage/dokumen/' . $item->ktp) }}" target="_blank">
                        <div class="file-bar-icon">
                            <i class="fa fa-download"></i>
                        </div>
                        <div class="file-bar-info">
                            <h5>Buka file</h5>
                            <span class="label label-default">.pdf</span>
                        </div>
                    </a>
                </div>
              </div>
          </div>
        @endif
        @if ($item->ktm != null)
          <div class="row">
              <div class="col-sm-4">
                <label>KTM</label>
              </div>
              <div class="col-sm-5">
                <div class="file-bar">
                    <a href="{{ asset('storage/dokumen/' . $item->ktm) }}" target="_blank">
                        <div class="file-bar-icon">
                            <i class="fa fa-download"></i>
                        </div>
                        <div class="file-bar-info">
                            <h5>Buka file</h5>
                            <span class="label label-default">.pdf</span>
                        </div>
                    </a>
                </div>
              </div>
          </div>
        @endif

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>