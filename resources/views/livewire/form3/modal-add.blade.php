<div>
    {{-- Be like water. --}}
    <div wire:ignore.self class="modal fade" id="form3" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Form Tambah Jam 13.01</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Observer</label>
                            </div>
                            <div class="col-sm-4">
                                <select name="" id="" class="form-control" wire:model="observer3"
                                    required>
                                    <option value="" selected hidden>Pilih Observer</option>
                                    @foreach ($observers as $observer)
                                        <option value="{{ $observer->id }}">{{ $observer->name }}</option>
                                    @endforeach
                                </select>
                                @error('observer3')
                                    <div class="has-error">
                                        <span style="margin-right: 5px;"
                                            class="glyphicon glyphicon-remove form-control-feedback"
                                            aria-hidden="true"></span><label class="control-label" for="inputError2">The
                                            observer field is required.</label>
                                    </div>
                                    <script>
                                        $('#form3').scrollTop(0);
                                    </script>
                                @enderror
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label style="text-decoration: underline;">Psychrometer Sangkar Meteorologi</label>
                            </div>
                            <div class="col-md-6 ml-12 mr-12">
                                <label for="" style="text-decoration: underline;" class="form-label">0.2
                                    m</label>
                                <div class="row">
                                    <div class="col-md-2 mr-6">
                                        <label for="">Tbk</label>
                                    </div>
                                    <div class="col-md-4 px-16 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model.lazy="tbk31">
                                        @error('tbk31')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-6">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model.lazy="tbb31">
                                        @error('tbb31')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                                <div class="spacer-10"></div>
                                <div class="row">
                                    <div class="col-md-2 mr-6">
                                        <label for="">RH</label>
                                    </div>
                                    <div class="col-md-4 px-16 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="RH31">
                                        @error('RH31')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="" style="text-decoration: underline;" class="form-label">1.2
                                    m</label>
                                <div class="row">
                                    <div class="col-md-2 mr-6">
                                        <label for="">Tbk</label>
                                    </div>
                                    <div class="col-md-4 px-16 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model.lazy="tbk32">
                                        @error('tbk32')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-6">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model.lazy="tbb32">
                                        @error('tbb32')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                                <div class="spacer-10"></div>
                                <div class="row">
                                    <div class="col-md-2 mr-6">
                                        <label for="">RH</label>
                                    </div>
                                    <div class="col-md-4 px-16 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="RH32">
                                        @error('RH32')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ml-12 mr-12">
                                <label for="" style="text-decoration: underline;" class="form-label">7
                                    m</label>
                                <div class="row">
                                    <div class="col-md-2 mr-6">
                                        <label for="">Tbk</label>
                                    </div>
                                    <div class="col-md-4 px-16 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model.lazy="tbk33">
                                        @error('tbk33')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-6">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model.lazy="tbb33">
                                        @error('tbb33')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                                <div class="spacer-10"></div>
                                <div class="row">
                                    <div class="col-md-2 mr-6">
                                        <label for="">RH</label>
                                    </div>
                                    <div class="col-md-4 px-16 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="RH33">
                                        @error('RH33')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="" style="text-decoration: underline;" class="form-label">10
                                    m</label>
                                <div class="row">
                                    <div class="col-md-2 mr-6">
                                        <label for="">Tbk</label>
                                    </div>
                                    <div class="col-md-4 px-16 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model.lazy="tbk34">
                                        @error('tbk34')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mr-6">
                                        <label for="">Tbb</label>
                                    </div>
                                    <div class="col-md-4 px-16 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model.lazy="tbb34">
                                        @error('tbb34')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                                <div class="spacer-10"></div>
                                <div class="row">
                                    <div class="col-md-2 mr-6">
                                        <label for="">RH</label>
                                    </div>
                                    <div class="col-md-4 px-16 mr-12">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="RH34">
                                        @error('RH34')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="" style="text-decoration: underline;">Hujan</label>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 ml-12 mr-6">
                                        <label for="">CH</label>
                                    </div>
                                    <div class="col-md-4 px-16">
                                        <input class="form-control" type="number" step="any" min="0"
                                            name="" id="" wire:model="ch3">
                                        @error('ch3')
                                            <div class="has-error">
                                                <span style="margin-right: 5px;"
                                                    class="glyphicon glyphicon-remove form-control-feedback"
                                                    aria-hidden="true"></span><label class="control-label"
                                                    for="inputError2">{{ $message }}</label>
                                            </div>
                                            <script>
                                                $('#form3').scrollTop(0);
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="spacer-10"></div> --}}
                    </form>
                    <div class="clear"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary pull-right" wire:click.prevent="storeForm3">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
