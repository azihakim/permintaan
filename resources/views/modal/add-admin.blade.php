<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModal" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Tambah admin</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('add-user.store') }}" id="form-add-user">
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
                        <div class="col-sm-4">
                            <div class="simpelselect-container" style="width: 215px">
                                <div class="simpelselect-inner">
                                    <div class="simpleselect-btn"><i class="fa fa-caret-down"></i></div>
                                </div>
                                <select require name="role" class="form-control simpleselect" id="role">
                                    <option value="Viewer"><span class='label label-warning'>Viewer</span></option>
                                    <option value="Admin"><span class='label label-success'>Admin</span></option>
                                    <option value="Observer"><span class='label label-warning'>Observer</span></option>
                                </select>
                            </div>
                            {{-- <div class="inline-labels">
                                <label><input type="checkbox" name="role[]" value="Admin"><span></span>Admin</label>
                                <label><input type="checkbox" name="role[]" value="Observer"><span></span>Observer</label>
                                <label><input type="checkbox" name="role[]" value="Viewer"><span></span>Viewer</label>
                            </div> --}}
                        </div>
                    </div>
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Email</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" required="" name="email" />
                        </div>
                    </div>
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Nama</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" required="" name="nama" />
                        </div>
                    </div>
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>NIP</label>
                            <span class="form-helper">NIP sebagai password default</span><span class="asterisk">*</span>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" required="" name="nip" />
                        </div>
                    </div>
                    <div class="spacer-10"></div>
            </div>
            <div class="clear"></div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary pull-right" id="submit-user">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </form>
            </div>
        </div>
    </div>
    {{-- <script>
        document.addEventListener("DOMContentLoaded ", function() {
            document.getElementById('submit-user').addEventListener("DOMContentLoaded ", function() {
                document.getElementById("form-add-user").submit();
            });
        });
    </script> --}}
</div>
