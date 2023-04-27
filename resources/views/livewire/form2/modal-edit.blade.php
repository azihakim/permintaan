<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div>
        {{-- In work, do what you enjoy. --}}
        <div wire:ignore.self class="modal fade" id="editForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" style="width: 1240px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Form Edit Jam 07.31</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            @csrf
                            {{-- <div class="row">
                            <div class="col-sm-4">
                                <label>Observer</label>
                            </div>
                            <div class="col-sm-4">
                                <select name="" id="" class="form-control" wire:model="observer2"
                                    required>
                                    <option value="" selected hidden>Pilih Observer</option>
                                    @foreach ($observers as $observer)
                                        <option value="{{ $observer->id }}">{{ $observer->name }}</option>
                                    @endforeach
                                </select>
                                @error('observer2')
                                    <div class="has-error">
                                        <span style="margin-right: 5px;"
                                            class="glyphicon glyphicon-remove form-control-feedback"
                                            aria-hidden="true"></span><label class="control-label" for="inputError2">The
                                            observer field is required.</label>
                                    </div>
                                    <script>
                                        $('#editForm2').scrollTop(0);
                                    </script>
                                @enderror
                            </div>
                        </div>
                        <div class="spacer-10"></div> --}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <label style="text-decoration: underline;">Psychrometer Sangkar Meteorologi</label>
                                </div>
                                <div class="col-md-3 ml-12 mr-20">
                                    <label for="" style="text-decoration: underline;" class="form-label">0.2
                                        m</label>
                                    <div class="row">
                                        <div class="col-md-2 label-mr-8">
                                            <label for="">Tbk</label>
                                        </div>
                                        <div class="col-md-4 mr-12 px-16">
                                            <input class="form-control" type="number" step="any" min="0"
                                                wire:model.lazy="tbk21" @disabled(true)>
                                            @error('tbk21')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 label-mr-8">
                                            <label for="">Tbb</label>
                                        </div>
                                        <div class="col-md-4 px-16">
                                            <input class="form-control" type="number" step="any" min="0"
                                                wire:model.lazy="tbb21" @disabled(true)>
                                            @error('tbb21')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="row">
                                        <div class="col-md-2 label-mr-8">
                                            <label for="">RH</label>
                                        </div>
                                        <div class="col-md-4 mr-12 px-16">
                                            <input class="form-control" type="number" step="any" min="0"
                                                wire:model="RH21" @disabled(true)>
                                            @error('RH21')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mr-20">
                                    <label for="" style="text-decoration: underline;" class="form-label">1.2
                                        m</label>
                                    <div class="row">
                                        <div class="col-md-2 label-mr-8">
                                            <label for="">Tbk</label>
                                        </div>
                                        <div class="col-md-4 mr-12 px-16">
                                            <input class="form-control" type="number" step="any" min="0"
                                                wire:model.lazy="tbk22">
                                            @error('tbk22')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 label-mr-8">
                                            <label for="">Tbb</label>
                                        </div>
                                        <div class="col-md-4 px-16">
                                            <input class="form-control" type="number" step="any" min="0"
                                                wire:model.lazy="tbb22">
                                            @error('tbb22')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="row">
                                        <div class="col-md-2 label-mr-8">
                                            <label for="">RH</label>
                                        </div>
                                        <div class="col-md-4 mr-12 px-16">
                                            <input class="form-control" type="number" step="any" min="0"
                                                wire:model="RH22">
                                            @error('RH22')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mr-20">
                                    <label for="" style="text-decoration: underline;" class="form-label">7
                                        m</label>
                                    <div class="row">
                                        <div class="col-md-2 label-mr-8">
                                            <label for="">Tbk</label>
                                        </div>
                                        <div class="col-md-4 mr-12 px-16">
                                            <input class="form-control" type="number" step="any" min="0"
                                                wire:model.lazy="tbk23" @disabled(true)>
                                            @error('tbk23')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 label-mr-8">
                                            <label for="">Tbb</label>
                                        </div>
                                        <div class="col-md-4 px-16">
                                            <input class="form-control" type="number" step="any" min="0"
                                                wire:model.lazy="tbb23" @disabled(true)>
                                            @error('tbb23')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="row">
                                        <div class="col-md-2 label-mr-8">
                                            <label for="">RH</label>
                                        </div>
                                        <div class="col-md-4 mr-12 px-16">
                                            <input class="form-control" type="number" step="any" min="0"
                                                wire:model="RH23" @disabled(true)>
                                            @error('RH23')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="" style="text-decoration: underline;" class="form-label">10
                                        m</label>
                                    <div class="row">
                                        <div class="col-md-2 label-mr-8">
                                            <label for="">Tbk</label>
                                        </div>
                                        <div class="col-md-4 mr-12 px-16">
                                            <input class="form-control" type="number" step="any" min="0"
                                                wire:model.lazy="tbk24" @disabled(true)>
                                            @error('tbk24')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 label-mr-8">
                                            <label for="">Tbb</label>
                                        </div>
                                        <div class="col-md-4 px-16">
                                            <input class="form-control" type="number" step="any" min="0"
                                                wire:model.lazy="tbb24" @disabled(true)>
                                            @error('tbb24')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="row">
                                        <div class="col-md-2 label-mr-8">
                                            <label for="">RH</label>
                                        </div>
                                        <div class="col-md-4 mr-12 px-16">
                                            <input class="form-control" type="number" step="any" min="0"
                                                wire:model="RH24" @disabled(true)>
                                            @error('RH24')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-10"></div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label style="text-decoration: underline;">Angin</label>
                                </div>
                                <div class="col-md-6 ml-12 mr-40">
                                    <label style="text-decoration: underline;">0.5 m</label>
                                    <div class="row">
                                        <div class="col-md-2 pr-0 mr-15">
                                            <label for="">Cup Counter</label>
                                        </div>
                                        <div class="col-md-3 px-35">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model.lazy="cup_counter21">
                                            @error('cup_counter21')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mr-15">
                                            <label for="">Kec. Rata<sup>2</sup> Cup Counter</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model="kecRata21">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label style="text-decoration: underline;">2 m</label>
                                    <div class="row">
                                        <div class="col-md-2 pr-0 mr-15">
                                            <label for="">Cup Counter</label>
                                        </div>
                                        <div class="col-md-3 px-35">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model.lazy="cup_counter22">
                                            @error('cup_counter22')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mr-15">
                                            <label for="">Kec. Rata<sup>2</sup> Cup Counter</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model="kecRata22">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ml-12 mr-36">
                                    <label style="text-decoration: underline;">4 m</label>
                                    <div class="row">
                                        <div class="col-md-3 mr-48">
                                            <label for="">Arah</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model="arah21"
                                                @disabled(true)>
                                            @error('arah21')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mr-12">
                                            <label for="">Kecepatan</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model="kecepatan21"
                                                @disabled(true)>
                                            @error('kecepatan21')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mr-36">
                                    <label style="text-decoration: underline;">7 m</label>
                                    <div class="row">
                                        <div class="col-md-3 mr-48">
                                            <label for="">Arah</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model="arah22"
                                                @disabled(true)>
                                            @error('arah22')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mr-12">
                                            <label for="">Kecepatan</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model="kecepatan22"
                                                @disabled(true)>
                                            @error('kecepatan22')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label style="text-decoration: underline;">10 m</label>
                                    <div class="row">
                                        <div class="col-md-3 mr-48">
                                            <label for="">Arah</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model="arah23">
                                            @error('arah23')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mr-12">
                                            <label for="">Kecepatan</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model="kecepatan23">
                                            @error('kecepatan23')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-10"></div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label style="text-decoration: underline;">Open Pan</label>
                                </div>
                                <div class="col-md-2 ml-12">
                                    <label for="" style="text-decoration: underline;">Hujan</label>
                                    <div class="row">
                                        <div class="col-md-6 mr-48">
                                            <label for="">CH</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model.lazy="ch_openpan2">
                                            @error('ch_openpan2')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mr-20">
                                    <label for="" style="text-decoration: underline;">Ketinggian Air di
                                        Panci</label>
                                    <div class="row">
                                        <div class="col-md-3 mr-58">
                                            <label for="">H</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model.lazy="h_openpan2">
                                            @error('h_openpan2')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        {{-- Pesan jika data H sebelumnya tidak ada --}}
                                        <div class="has-error">
                                            <span style="margin-right: 5px;" class="form-control-feedback"
                                                aria-hidden="true"></span><label class="control-label"
                                                for="inputError2">{{ $pesanOpenPan2 }}</label>
                                        </div>
                                        {{-- End Pesan --}}
                                        <div class="col-md-3 mr-50">
                                            <label for="">EV <span
                                                    style="font-size: 16px; font-weight: bolder">*</span></label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model="ev_openpan2">
                                            @error('ev_openpan2')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="" style="text-decoration: underline;">Suhu Air</label>
                                    <div class="row">
                                        <div class="col-md-2 mr-54">
                                            <label for="">T</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model="t2">
                                            @error('t2')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 mr-40">
                                            <label for="">Max</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model="max2">
                                            @error('max2')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 mr-40">
                                            <label for="">Min</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control" type="number" step="any" min="0"
                                                name="" id="" wire:model="min2">
                                            @error('min2')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-10"></div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label style="text-decoration: underline;">Psychrometer Assmann</label>
                                </div>
                                <div class="col-md-3 ml-12 mr-12">
                                    <label for="" style="text-decoration:underline;">5 cm</label>
                                    <div class="row">
                                        <div class="col-md-2 mr-8">
                                            <label for="">BB</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bb21">
                                            @error('bb21')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 mr-8 ml-8">
                                            <label for="">BK</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bk21">
                                            @error('bk21')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mr-12">
                                    <label for="" style="text-decoration:underline;">10 cm</label>
                                    <div class="row">
                                        <div class="col-md-2 mr-8">
                                            <label for="">BB</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bb22">
                                            @error('bb22')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 mr-8 ml-8">
                                            <label for="">BK</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bk22">
                                            @error('bk22')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mr-12">
                                    <label for="" style="text-decoration:underline;">20 cm</label>
                                    <div class="row">
                                        <div class="col-md-2 mr-8">
                                            <label for="">BB</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bb23">
                                            @error('bb23')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 mr-8 ml-8">
                                            <label for="">BK</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bk23">
                                            @error('bk23')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mr-12">
                                    <label for="" style="text-decoration:underline;">50 cm</label>
                                    <div class="row">
                                        <div class="col-md-2 mr-8">
                                            <label for="">BB</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bb24">
                                            @error('bb24')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 mr-8 ml-8">
                                            <label for="">BK</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bk24">
                                            @error('bk24')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-12 mr-12">
                                    <label for="" style="text-decoration:underline;">100 cm</label>
                                    <div class="row">
                                        <div class="col-md-2 mr-8">
                                            <label for="">BB</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bb25">
                                            @error('bb25')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 mr-8 ml-8">
                                            <label for="">BK</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bk25">
                                            @error('bk25')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mr-12">
                                    <label for="" style="text-decoration:underline;">150 cm</label>
                                    <div class="row">
                                        <div class="col-md-2 mr-8">
                                            <label for="">BB</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bb26">
                                            @error('bb26')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 mr-8 ml-8">
                                            <label for="">BK</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bk26">
                                            @error('bk26')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="" style="text-decoration:underline;">200 cm</label>
                                    <div class="row">
                                        <div class="col-md-2 mr-8">
                                            <label for="">BB</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bb27">
                                            @error('bb27')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 mr-8 ml-8">
                                            <label for="">BK</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" step="any" min="0" class="form-control"
                                                wire:model="bk27">
                                            @error('bk27')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-10"></div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="" style="text-decoration:underline;">Suhu Tanah</label>
                                </div>
                                <div class="col-md-4 mr-32 ml-12">
                                    <label for="" style="text-decoration:underline">0 cm</label>
                                    <div class="row">
                                        <div class="col-md-3 mr-20">
                                            <label for="">Berumput</label>
                                        </div>
                                        <div class="col-md-3 mr-8">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="berumput21">
                                            @error('berumput21')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mr-34">
                                            <label for="">Gundul</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="gundul21">
                                            @error('gundul21')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mr-32">
                                    <label for="" style="text-decoration:underline">2 cm</label>
                                    <div class="row">
                                        <div class="col-md-3 mr-20">
                                            <label for="">Berumput</label>
                                        </div>
                                        <div class="col-md-3 mr-8">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="berumput22">
                                            @error('berumput22')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mr-34">
                                            <label for="">Gundul</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="gundul22">
                                            @error('gundul22')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mr-32">
                                    <label for="" style="text-decoration:underline">5 cm</label>
                                    <div class="row">
                                        <div class="col-md-3 mr-20">
                                            <label for="">Berumput</label>
                                        </div>
                                        <div class="col-md-3 mr-8">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="berumput23">
                                            @error('berumput23')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mr-34">
                                            <label for="">Gundul</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="gundul23">
                                            @error('gundul23')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mr-32 ml-12">
                                    <label for="" style="text-decoration:underline">10 cm</label>
                                    <div class="row">
                                        <div class="col-md-3 mr-20">
                                            <label for="">Berumput</label>
                                        </div>
                                        <div class="col-md-3 mr-8">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="berumput24">
                                            @error('berumput24')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mr-34">
                                            <label for="">Gundul</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="gundul24">
                                            @error('gundul24')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mr-32">
                                    <label for="" style="text-decoration:underline">20 cm</label>
                                    <div class="row">
                                        <div class="col-md-3 mr-20">
                                            <label for="">Berumput</label>
                                        </div>
                                        <div class="col-md-3 mr-8">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="berumput25">
                                            @error('berumput25')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mr-34">
                                            <label for="">Gundul</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="gundul25">
                                            @error('gundul25')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mr-32">
                                    <label for="" style="text-decoration:underline">50 cm</label>
                                    <div class="row">
                                        <div class="col-md-3 mr-20">
                                            <label for="">Berumput</label>
                                        </div>
                                        <div class="col-md-3 mr-8">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="berumput26"
                                                @disabled(true)>
                                            @error('berumput26')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mr-34">
                                            <label for="">Gundul</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="gundul26"
                                                @disabled(true)>
                                            @error('gundul26')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ml-12">
                                    <label for="" style="text-decoration:underline">100 cm</label>
                                    <div class="row">
                                        <div class="col-md-3 mr-20">
                                            <label for="">Berumput</label>
                                        </div>
                                        <div class="col-md-3 mr-8">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="berumput27"
                                                @disabled(true)>
                                            @error('berumput27')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mr-34">
                                            <label for="">Gundul</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="" id="" class="form-control"
                                                step="any" min="0" wire:model="gundul27"
                                                @disabled(true)>
                                            @error('gundul27')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-10"></div>
                            <div class="row">
                                <div class="col-sm-12"><label for="" style="text-decoration:underline">Piche
                                        Evaporimeter</label></div>
                                <div class="col-md-5 ml-12">
                                    <label for="" style="text-decoration:underline;">Ketinggian Air di Piche
                                        1.2
                                        m</label>
                                    <div class="row">
                                        <div class="col-md-1 mr-8">
                                            <label for="">H</label>
                                        </div>
                                        <div class="col-md-2 pr-0 mrP-20">
                                            <input type="number" name="" id=""
                                                class="form-control" step="any" min="0"
                                                wire:model.lazy="h2_piche">
                                            @error('h2_piche')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 mr-24">
                                            <label for="">Reset</label>
                                        </div>
                                        <div class="col-md-2 pr-0 mrP-20">
                                            <input type="number" name="" id=""
                                                class="form-control" step="any" min="0"
                                                wire:model="reset_piche2">
                                            @error('reset2_piche')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">EV</label>
                                        </div>
                                        <div class="col-md-2 pr-0">
                                            <input type="number" name="" id=""
                                                class="form-control" step="any" min="0"
                                                wire:model="ev2_piche">
                                            @error('ev2_piche')
                                                <div class="has-error">
                                                    <span style="margin-right: 5px;"
                                                        class="glyphicon glyphicon-remove form-control-feedback"
                                                        aria-hidden="true"></span><label class="control-label"
                                                        for="inputError2">{{ $message }}</label>
                                                </div>
                                                <script>
                                                    $('#editForm2').scrollTop(0);
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Pesan jika data reset sebelumnya tidak ada --}}
                                    <div class="has-error">
                                        <span style="margin-right: 5px;" class="form-control-feedback"
                                            aria-hidden="true"></span><label class="control-label"
                                            for="inputError2">{{ $pesanForm2 }}</label>
                                    </div>
                                    {{-- End Pesan --}}
                                </div>
                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary pull-right" wire:click.prevent="updateForm2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
