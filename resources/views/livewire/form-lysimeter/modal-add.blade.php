<div>
    {{-- In work, do what you enjoy. --}}
    <div wire:ignore.self class="modal fade" id="lysimeter" tabindex="-1" role="dialog">
        <div class="modal-dialog" style="width: 655px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Form Tambah Lysimeter</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-5">
                                <label>Observer</label>
                            </div>
                            <div class="col-sm-4">
                                <select name="" id="" class="form-control" wire:model="observer"
                                    required>
                                    <option value="" selected hidden>Pilih Observer</option>
                                    @foreach ($observers as $observer)
                                        <option value="{{ $observer->id }}">{{ $observer->name }}</option>
                                    @endforeach
                                </select>
                                @error('observer')
                                    <div class="has-error">
                                        <span style="margin-right: 5px;"
                                            class="glyphicon glyphicon-remove form-control-feedback"
                                            aria-hidden="true"></span><label class="control-label" for="inputError2">The
                                            observer field is required.</label>
                                    </div>
                                    <script>
                                        $('#lysimeter').scrollTop(0);
                                    </script>
                                @enderror
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-md-5 pr-0">
                                <label for="">Nama Tanaman Komoditi</label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" wire:model="nama">
                                @error('nama')
                                    <div class="has-error">
                                        <span style="margin-right: 5px;"
                                            class="glyphicon glyphicon-remove form-control-feedback"
                                            aria-hidden="true"></span><label class="control-label"
                                            for="inputError2">{{ $message }}</label>
                                    </div>
                                    <script>
                                        $('#lama-penyinaran').scrollTop(0);
                                    </script>
                                @enderror
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-md-5 pr-0">
                                <label for="">Keterangan Fase</label>
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" name="" id="" cols="30" rows="10" wire:model="keterangan"></textarea>
                                {{-- <input  type="text" > --}}
                                @error('keterangan')
                                    <div class="has-error">
                                        <span style="margin-right: 5px;"
                                            class="glyphicon glyphicon-remove form-control-feedback"
                                            aria-hidden="true"></span><label class="control-label"
                                            for="inputError2">{{ $message }}</label>
                                    </div>
                                    <script>
                                        $('#lama-penyinaran').scrollTop(0);
                                    </script>
                                @enderror
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-md-5 pr-0">
                                <label for="">Jumlah Curah Hujan per Jam 17.01 WIB</label>
                            </div>
                            <div class="col-md-2">
                                <input class="form-control" type="number" wire:model="jumlahCH17" step="any"
                                    min="0">
                                @error('jumlahCH17')
                                    <div class="has-error">
                                        <span style="margin-right: 5px;"
                                            class="glyphicon glyphicon-remove form-control-feedback"
                                            aria-hidden="true"></span><label class="control-label"
                                            for="inputError2">{{ $message }}</label>
                                    </div>
                                    <script>
                                        $('#lama-penyinaran').scrollTop(0);
                                    </script>
                                @enderror
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" style="text-decoration:underline;">Tanah Gundul</label>
                                <div class="row">
                                    <div class="col-md-3 pr-0 ml-12 mr-15">
                                        <label for="">Siram</label>
                                    </div>
                                    <div class="col-md-3 px-8">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="siram1">
                                        @error('siram1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#lysimeter').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 pr-0 mr-15">
                                        <label for="">Sedot</label>
                                    </div>
                                    <div class="col-md-3 px-8">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="sedot1">
                                        @error('sedot1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#lysimeter').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="" style="text-decoration:underline;">Tanah Komoditi</label>
                                <div class="row">
                                    <div class="col-md-3 pr-0 ml-12 mr-15">
                                        <label for="">Siram</label>
                                    </div>
                                    <div class="col-md-3 px-8">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="siram2">
                                        @error('siram2')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#lysimeter').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 pr-0 mr-15">
                                        <label for="">Sedot</label>
                                    </div>
                                    <div class="col-md-3 px-8">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="sedot2">
                                        @error('sedot2')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#lysimeter').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="" style="text-decoration:underline;">Tanah Berumput</label>
                                <div class="row">
                                    <div class="col-md-3 pr-0 ml-12 mr-15">
                                        <label for="">Siram</label>
                                    </div>
                                    <div class="col-md-3 px-8">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="siram3">
                                        @error('siram3')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#lysimeter').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 pr-0 mr-15">
                                        <label for="">Sedot</label>
                                    </div>
                                    <div class="col-md-3 px-8">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="sedot3">
                                        @error('sedot3')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#lysimeter').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary pull-right" wire:click.prevent="storeForm">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
