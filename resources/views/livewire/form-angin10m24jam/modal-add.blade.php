<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div wire:ignore.self class="modal fade" id="angin-10m-24jam" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" style="width: 1000px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Form Tambah Angin 10M 24 Jam</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
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
                                        $('#angin-10m-24jam').scrollTop(0);
                                    </script>
                                @enderror
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="" style="text-decoration: underline;">Angin 10 Meter 24 Jam</label>
                            </div>
                            <div class="col-md-12 ml-12">
                                <div class="row">
                                    <div class="col-md-2 mr-24">
                                        <label for="">Kec. Rata-Rata</label>
                                    </div>
                                    <div class="col-md-1 p-0 mrP-25">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kec_rata_rata">
                                        @error('kec_rata_rata')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#angin-10m-24jam').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-16">
                                        <label for="">Arah Terbanyak</label>
                                    </div>
                                    <div class="col-md-1 p-0 mrP-25">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="arah_terbanyak">
                                        @error('arah_terbanyak')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#angin-10m-24jam').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-50">
                                        <label for="">Kec. Maks</label>
                                    </div>
                                    <div class="col-md-1 p-0 mrP-25">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="kec_maks">
                                        @error('kec_maks')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#angin-10m-24jam').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <label for="">Arah</label>
                                    </div>
                                    <div class="col-md-1 p-0">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="arah">
                                        @error('arah')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#angin-10m-24jam').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-md-3 mr-28">
                                <label for="" style="text-decoration:underline;">Curah Hujan 24
                                    Jam</label>
                                <div class="row">
                                    <div class="col-md-4 ml-12">
                                        <label for="">Total</label>
                                    </div>
                                    <div class="col-md-4 px-8">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="total_curah_hujan">
                                        @error('total_curah_hujan')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#angin-10m-24jam').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mr-28">
                                <label for="" style="text-decoration:underline;">Penguapan 24
                                    Jam</label>
                                <div class="row">
                                    <div class="col-md-4 ml-12">
                                        <label for="">Total</label>
                                    </div>
                                    <div class="col-md-4 px-8">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="total_penguapan">
                                        @error('total_penguapan')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#angin-10m-24jam').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mr-28">
                                <label for="" style="text-decoration:underline;">Piche 24
                                    Jam</label>
                                <div class="row">
                                    <div class="col-md-4 ml-12">
                                        <label for="">Total</label>
                                    </div>
                                    <div class="col-md-4 px-8">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="total_piche">
                                        @error('total_piche')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#angin-10m-24jam').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="" style="text-decoration:underline;">Visibility Minimum</label>
                                <div class="row">
                                    <div class="col-md-4 ml-12">
                                        <label for="">Total</label>
                                    </div>
                                    <div class="col-md-4 px-8">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="total_visibility">
                                        @error('total_visibility')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#angin-10m-24jam').scrollTop(0);
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
                    <button class="btn btn-primary pull-right" wire:click.prevent="storeForm">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
