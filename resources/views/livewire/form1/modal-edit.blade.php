<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div wire:ignore.self class="modal fade" id="editForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" style="width: 1240px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Form Edit Jam 07.01</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Observer</label>
                            </div>
                            <div class="col-sm-4">
                                <select name="" id="" class="form-control" wire:model="observer1"
                                    required>
                                    <option value="" selected hidden>Pilih Observer</option>
                                    @foreach ($observers as $observer)
                                        <option value="{{ $observer->id }}">{{ $observer->name }}</option>
                                    @endforeach
                                </select>
                                @error('observer1')
                                    <div class="has-error">
                                        <span style="margin-right: 5px;"
                                            class="glyphicon glyphicon-remove form-control-feedback"
                                            aria-hidden="true"></span><label class="control-label" for="inputError2">The
                                            observer field is required.</label>
                                    </div>
                                    <script>
                                        $('#form1').scrollTop(0);
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
                                            wire:model="tbk11">
                                        @error('tbk11')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 label-mr-8">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="tbb11">
                                        @error('tbb11')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
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
                                            wire:model="tbk12">
                                        @error('tbk12')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 label-mr-8">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="tbb12">
                                        @error('tbb12')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
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
                                            wire:model="tbk13">
                                        @error('tbk13')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 label-mr-8">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="tbb13">
                                        @error('tbb13')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
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
                                            wire:model="tbk14">
                                        @error('tbk14')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 label-mr-8">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="tbb14">
                                        @error('tbb14')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
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
                                            name="" id="" wire:model="cup_counter11">
                                        @error('cup_counter11')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mr-15">
                                        <label for="">Kec. Rata<sup>2</sup> Cup Counter</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="">
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
                                            name="" id="" wire:model="cup_counter12">
                                        @error('cup_counter12')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mr-15">
                                        <label for="">Kec. Rata<sup>2</sup> Cup Counter</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="">
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
                                            name="" id="" wire:model="arah11">
                                        @error('arah11')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-12">
                                        <label for="">Kecepatan</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kecepatan11">
                                        @error('kecepatan11')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
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
                                            name="" id="" wire:model="arah12">
                                        @error('arah12')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-12">
                                        <label for="">Kecepatan</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kecepatan12">
                                        @error('kecepatan12')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
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
                                            name="" id="" wire:model="arah13">
                                        @error('arah13')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-12">
                                        <label for="">Kecepatan</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kecepatan13">
                                        @error('kecepatan13')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
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
                                            name="" id="" wire:model="h1">
                                        @error('h1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-50">
                                        <label for="">EV</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min=0
                                            name="" id="" wire:model="ev1">
                                        @error('ev1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
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
                                            name="" id="" wire:model="ch1">
                                        @error('ch1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
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
                                            name="" id="" wire:model="t1">
                                        @error('t1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-40">
                                        <label for="">Max</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="max1">
                                        @error('max1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-40">
                                        <label for="">Min</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="min1">
                                        @error('min1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="" style="text-decoration:underline;">Barometer</label>
                            </div>
                            <div class="col-md-8 ml-12">
                                <div class="row">
                                    <div class="col-md-1 mr-24">
                                        <label for="">Suhu</label>
                                    </div>
                                    <div class="col-md-2 px-36 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="suhu1">
                                        @error('suhu1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-1 mrP-10">
                                        <label for="">Barometer</label>
                                    </div>
                                    <div class="col-md-2 px-36 mr-10">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="barometer1">
                                        @error('barometer1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-1 mr-28">
                                        <label for="">QFE</label>
                                    </div>
                                    <div class="col-md-2 px-36 mr-10">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="qfe1">
                                        @error('qfe1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-1 mr-28">
                                        <label for="">QFF</label>
                                    </div>
                                    <div class="col-md-2 px-36">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="qff1">
                                        @error('qff1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
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
                                            name="" id="" wire:model="kode_tanah1">
                                        @error('kode_tanah1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 pr-0">
                                        <label for="">Kode Cuaca</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kode_cuaca1">
                                        @error('kode_cuaca1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="" style="text-decoration:underline">Suhu Min Rumput</label>
                            </div>
                            <div class="col-md-4 ml-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Pembacaan</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="pembacaan1">
                                        @error('pembacaan1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mr-36">
                                        <label for="">Reset</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="reset1">
                                        @error('reset1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="" style="text-decoration:underline">Radiasi</label>
                            </div>
                            <div class="col-md-2 ml-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="">I</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="i1">
                                        @error('i1')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form1').scrollTop(0);
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
                    <button class="btn btn-primary pull-right" wire:click.prevent="updateForm1">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
