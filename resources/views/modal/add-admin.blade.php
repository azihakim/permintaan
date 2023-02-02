<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModal" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Tambah admin</h4>
      </div>
      <div class="modal-body">
        
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
                  <select require name="status_form" class="form-control simpleselect" id="role">
                      <option value="2"><span class='label label-warning'>Viewer</span></option>
                      <option value="3"><span class='label label-success'>Admin</span></option>
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
              <input type="text" class="form-control" required="" name=""/>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-4">
                <label>Email</label>
            </div>
            <div class="col-sm-5">
              <input type="text" class="form-control" required="" name=""/>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-4">
                <label>Password</label>
            </div>
            <div class="col-sm-5">
              <input type="text" class="form-control" required="" name=""/>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">Simpan</button>
      </div>
    </div>
  </div>
</div>