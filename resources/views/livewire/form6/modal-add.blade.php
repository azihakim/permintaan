<div>
    {{-- Do your work, then step back. --}}
    <div wire:ignore.self class="modal fade" id="form6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" style="width: 1240px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Form Tambah Jam 17.31</h4>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        {{-- <div class="row">
                            <div class="col-sm-4">
                                <label>Observer</label>
                            </div>
                            <div class="col-sm-4">
                                <select name="" id="" class="form-control" wire:model="observer6"
                                    required>
                                    <option value="" selected hidden>Pilih Observer</option>
                                    @foreach ($observers as $observer)
                                        <option value="{{ $observer->id }}">{{ $observer->name }}</option>
                                    @endforeach
                                </select>
                                @error('observer6')
                                    <div class="has-error">
                                        <span style="margin-right: 5px;"
                                            class="glyphicon glyphicon-remove form-control-feedback"
                                            aria-hidden="true"></span><label class="control-label" for="inputError2">The
                                            observer field is required.</label>
                                    </div>
                                    <script>
                                        $('#form6').scrollTop(0);
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
                                            wire:model.lazy="tbk61">
                                        @error('tbk61')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 label-mr-8">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model.lazy="tbb61">
                                        @error('tbb61')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model="RH61">
                                        @error('RH61')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model.lazy="tbk62">
                                        @error('tbk62')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 label-mr-8">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model.lazy="tbb62">
                                        @error('tbb62')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model="RH62">
                                        @error('RH62')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model.lazy="tbk63">
                                        @error('tbk63')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 label-mr-8">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model.lazy="tbb63">
                                        @error('tbb63')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model="RH63">
                                        @error('RH63')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model.lazy="tbk64">
                                        @error('tbk64')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 label-mr-8">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model.lazy="tbb64">
                                        @error('tbb64')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model="RH64">
                                        @error('RH64')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            name="" id="" wire:model.lazy="cup_counter61">
                                        @error('cup_counter61')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mr-15">
                                        <label for="">Kec. Rata<sup>2</sup> Cup Counter</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kecRata61">
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
                                            name="" id="" wire:model.lazy="cup_counter62">
                                        @error('cup_counter62')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mr-15">
                                        <label for="">Kec. Rata<sup>2</sup> Cup Counter</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kecRata62">
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
                                            name="" id="" wire:model="arah61">
                                        @error('arah61')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-12">
                                        <label for="">Kecepatan</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kecepatan61">
                                        @error('kecepatan61')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            name="" id="" wire:model="arah62">
                                        @error('arah62')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-12">
                                        <label for="">Kecepatan</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kecepatan62">
                                        @error('kecepatan62')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            name="" id="" wire:model="arah63">
                                        @error('arah63')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-12">
                                        <label for="">Kecepatan</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kecepatan63">
                                        @error('kecepatan63')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                            <div class="col-md-4 ml-12 mr-80">
                                <label for="" style="text-decoration: underline;">Ketinggian Air di
                                    Panci</label>
                                <div class="row">
                                    <div class="col-md-3 mr-58">
                                        <label for="">H</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="h2_openpan6">
                                        @error('h2_openpan6')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-50">
                                        <label for="">EV</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="ev2_openpan6">
                                        @error('ev2_openpan6')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mr-20">
                                <label for="" style="text-decoration: underline;">Hujan</label>
                                <div class="row">
                                    <div class="col-md-6 mr-48">
                                        <label for="">CH</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="ch6">
                                        @error('ch6')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            name="" id="" wire:model="t6">
                                        @error('t6')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-40">
                                        <label for="">Max</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="max6">
                                        @error('max6')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-40">
                                        <label for="">Min</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="min6">
                                        @error('min6')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model="bb61">
                                        @error('bb61')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-8 ml-8">
                                        <label for="">BK</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" step="any" min="0" class="form-control"
                                            wire:model="bk61">
                                        @error('bk61')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model="bb62">
                                        @error('bb62')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-8 ml-8">
                                        <label for="">BK</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" step="any" min="0" class="form-control"
                                            wire:model="bk62">
                                        @error('bk62')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model="bb63">
                                        @error('bb63')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-8 ml-8">
                                        <label for="">BK</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" step="any" min="0" class="form-control"
                                            wire:model="bk63">
                                        @error('bk63')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model="bb64">
                                        @error('bb64')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-8 ml-8">
                                        <label for="">BK</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" step="any" min="0" class="form-control"
                                            wire:model="bk64">
                                        @error('bk64')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model="bb65">
                                        @error('bb65')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-8 ml-8">
                                        <label for="">BK</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" step="any" min="0" class="form-control"
                                            wire:model="bk65">
                                        @error('bk65')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model="bb66">
                                        @error('bb66')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-8 ml-8">
                                        <label for="">BK</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" step="any" min="0" class="form-control"
                                            wire:model="bk66">
                                        @error('bk66')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            wire:model="bb67">
                                        @error('bb67')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-8 ml-8">
                                        <label for="">BK</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" step="any" min="0" class="form-control"
                                            wire:model="bk67">
                                        @error('bk67')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput61">
                                        @error('berumput61')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul61">
                                        @error('gundul61')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput62">
                                        @error('berumput62')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul62">
                                        @error('gundul62')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput63">
                                        @error('berumput63')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul63">
                                        @error('gundul63')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput64">
                                        @error('berumput64')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul64">
                                        @error('gundul64')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput65">
                                        @error('berumput65')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul65">
                                        @error('gundul65')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput66">
                                        @error('berumput66')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul66">
                                        @error('gundul66')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput67">
                                        @error('berumput67')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul67">
                                        @error('gundul67')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
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
                                <label for="" style="text-decoration:underline;">Ketinggian Air di Piche 1.2
                                    m</label>
                                <div class="row">
                                    <div class="col-md-1 mr-8">
                                        <label for="">H</label>
                                    </div>
                                    <div class="col-md-2 pr-0 mrP-20">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model.lazy="h2_piche6">
                                        @error('h2_piche6')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-md-2 mr-24">
                                        <label for="">Reset</label>
                                    </div> --}}
                                    {{-- <div class="col-md-2 pr-0 mrP-20">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="reset_piche6">
                                        @error('reset2_piche')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form2').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div> --}}
                                    <div class="col-md-1">
                                        <label for="">EV</label>
                                    </div>
                                    <div class="col-md-2 pr-0">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="ev2_piche6">
                                        @error('ev2_piche6')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form6').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Pesan jika data reset sebelumnya tidak ada --}}
                                <div class="has-error">
                                    <span style="margin-right: 5px;" class="form-control-feedback"
                                        aria-hidden="true"></span><label class="control-label"
                                        for="inputError2">{{ $pesanForm6 }}</label>
                                </div>
                                {{-- End Pesan --}}
                            </div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary pull-right" wire:click.prevent="storeForm6">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
