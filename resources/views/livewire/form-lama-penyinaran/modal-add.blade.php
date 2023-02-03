<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div wire:ignore.self class="modal fade" id="lama-penyinaran" tabindex="-1" role="dialog">
        <div class="modal-dialog" style="width: 655px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Form Tambah Lama Penyinaran</h4>
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
                                        $('#lama-penyinaran').scrollTop(0);
                                    </script>
                                @enderror
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 pr-0">
                                        <label for="">06-07</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="lm1">
                                        @error('lm1')
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
                                    <div class="col-md-2 pr-0">
                                        <label for="">07-08</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="lm2">
                                        @error('lm2')
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
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 pr-0">
                                        <label for="">08-09</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="lm3">
                                        @error('lm3')
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
                                    <div class="col-md-2 pr-0">
                                        <label for="">09-10</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="lm4">
                                        @error('lm4')
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
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 pr-0">
                                        <label for="">10-11</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="lm5">
                                        @error('lm5')
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
                                    <div class="col-md-2 pr-0">
                                        <label for="">11-12</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="lm6">
                                        @error('lm6')
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
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 pr-0">
                                        <label for="">12-13</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="lm7">
                                        @error('lm7')
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
                                    <div class="col-md-2 pr-0">
                                        <label for="">13-14</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="lm8">
                                        @error('lm8')
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
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 pr-0">
                                        <label for="">14-15</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="lm9">
                                        @error('lm9')
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
                                    <div class="col-md-2 pr-0">
                                        <label for="">15-16</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="lm10">
                                        @error('lm10')
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
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 pr-0">
                                        <label for="">16-17</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="lm11">
                                        @error('lm11')
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
                                    <div class="col-md-2 pr-0">
                                        <label for="">17-18</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="number" step="any" min="0"
                                            wire:model="lm12">
                                        @error('lm12')
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
