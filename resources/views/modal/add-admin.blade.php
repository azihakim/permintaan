<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModal" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Tambah admin</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('add-user.store') }}">
          <div class="row">
            <div class="col-sm-4">
                <h4 class="bold">Data user</h4>
            </div>
          </div>
          <div class="spacer-10"></div>
          <div class="row">
              <div class="col-sm-4">
                  <label>Role</label>
              </div>
              <div class="col-sm-5">
                <div class="simpelselect-container" style="width: 250px">
                    <div class="simpelselect-inner">
                        <div class="simpleselect-btn"><i class="fa fa-caret-down"></i></div>
                    </div>
                    <select require name="role" class="form-control simpleselect" id="role">
                        <option value="Super Admin"><span class='label label-warning'>Super Admin</span></option>
                        <option value="Viewer"><span class='label label-warning'>Viewer</span></option>
                        <option value="Admin"><span class='label label-success'>Admin</span></option>
                        <option value="Masyarakat"><span class='label label-warning'>Masyarakat</span></option>
                        <option value="Observer"><span class='label label-warning'>Observer</span></option>
                    </select>
                </div>
              </div>
          </div>
          <div class="spacer-10"></div>
          <div class="row">
              <div class="col-sm-4">
                  <label>Nama</label>
              </div>
              <div class="col-sm-5">
                <input type="text" class="form-control" required="" name="nama"/>
              </div>
          </div>
          <div class="spacer-10"></div>
          <div class="row">
              <div class="col-sm-4">
                  <label>Email</label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" required="" name="email"/>
              </div>
          </div>
          <div class="spacer-10"></div>
          <div class="row">
              <div class="col-sm-4">
                  <label>Nomor telepon</label>
              </div>
              <div class="col-sm-5">
                <input type="text" class="form-control" required="" name="no_wa"/>
              </div>
          </div>
          <div class="spacer-10"></div>
          <div class="row">
              <div class="col-sm-4">
                  <label>Password</label>
              </div>
              <div class="col-sm-5">
                <input type="text" class="form-control" required="" name="password"/>
              </div>
          </div>
        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>