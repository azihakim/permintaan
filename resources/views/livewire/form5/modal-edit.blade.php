<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div wire:ignore.self class="modal fade" id="editForm5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" style="width: 1240px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Form Edit Jam 14.01</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Observer</label>
                            </div>
                            <div class="col-sm-4">
                                <select name="" id="" class="form-control" wire:model="observer5"
                                    required>
                                    <option value="" selected hidden>Pilih Observer</option>
                                    @foreach ($observers as $observer)
                                        <option value="{{ $observer->id }}">{{ $observer->name }}</option>
                                    @endforeach
                                </select>
                                @error('observer5')
                                    <div class="has-error">
                                        <span style="margin-right: 5px;"
                                            class="glyphicon glyphicon-remove form-control-feedback"
                                            aria-hidden="true"></span><label class="control-label" for="inputError2">The
                                            observer field is required.</label>
                                    </div>
                                    <script>
                                        $('#form5').scrollTop(0);
                                    </script>
                                @enderror
                            </div>
                        </div>
                        <div class="spacer-10"></div>
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
                                            wire:model="tbk51">
                                        @error('tbk51')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 label-mr-8">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="tbb51">
                                        @error('tbb51')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            wire:model="tbk52">
                                        @error('tbk52')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 label-mr-8">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="tbb52">
                                        @error('tbb52')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            wire:model="tbk53">
                                        @error('tbk53')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 label-mr-8">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="tbb53">
                                        @error('tbb53')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            wire:model="tbk54">
                                        @error('tbk54')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 label-mr-8">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="tbb54">
                                        @error('tbb54')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            name="" id="" wire:model="cup_counter51">
                                        @error('cup_counter51')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mr-15">
                                        <label for="">Kec. Rata<sup>2</sup> Cup Counter</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="">
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
                                            name="" id="" wire:model="cup_counter52">
                                        @error('cup_counter52')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mr-15">
                                        <label for="">Kec. Rata<sup>2</sup> Cup Counter</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="">
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
                                            name="" id="" wire:model="arah51">
                                        @error('arah51')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-12">
                                        <label for="">Kecepatan</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kecepatan51">
                                        @error('kecepatan51')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            name="" id="" wire:model="arah52">
                                        @error('arah52')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-12">
                                        <label for="">Kecepatan</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kecepatan52">
                                        @error('kecepatan52')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            name="" id="" wire:model="arah53">
                                        @error('arah53')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-12">
                                        <label for="">Kecepatan</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kecepatan53">
                                        @error('kecepatan53')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput51">
                                        @error('berumput51')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul51">
                                        @error('gundul51')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput52">
                                        @error('berumput52')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul52">
                                        @error('gundul52')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput53">
                                        @error('berumput53')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul53">
                                        @error('gundul53')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput54">
                                        @error('berumput54')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul54">
                                        @error('gundul54')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput55">
                                        @error('berumput55')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul55">
                                        @error('gundul55')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput56">
                                        @error('berumput56')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul56">
                                        @error('gundul56')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                                            step="any" min="0" wire:model="berumput57">
                                        @error('berumput57')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-34">
                                        <label for="">Gundul</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            step="any" min="0" wire:model="gundul57">
                                        @error('gundul57')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-12"><label for=""
                                    style="text-decoration:underline;">Termometer Maksimum dan Minimum</label></div>
                            <div class="col-md-4 ml-12">
                                <label for="" style="text-decoration:underline">20 cm</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Max</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            wire:model="max51">
                                        @error('max51')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Reset</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            wire:model="reset51">
                                        @error('reset51')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="" style="text-decoration:underline">120 cm</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Max</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            wire:model="max52">
                                        @error('max52')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Reset</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="" id="" class="form-control"
                                            wire:model="reset52">
                                        @error('reset52')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="" style="text-decoration:underline;">Kondisi Cuaca dan
                                    Tanah</label>
                            </div>
                            <div class="col-md-4 ml-12">
                                <div class="row">
                                    <div class="col-md-3 pr-0">
                                        <label for="">Kode Tanah</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kode_tanah5">
                                        @error('kode_tanah5')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 pr-0">
                                        <label for="">Kode Cuaca</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kode_cuaca5">
                                        @error('kode_cuaca5')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form5').scrollTop(0);
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
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary pull-right" wire:click.prevent="updateForm5">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
