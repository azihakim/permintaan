<div>
    {{-- Stop trying to control. --}}
    <div wire:ignore.self class="modal fade" id="editFormHujan3" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Form Edit Jam 19.01</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Observer</label>
                            </div>
                            <div class="col-sm-4">
                                <select name="" id="" class="form-control" wire:model="observerHujan3"
                                    required>
                                    <option value="" selected hidden>Pilih Observer</option>
                                    @foreach ($observers as $observer)
                                        <option value="{{ $observer->id }}">{{ $observer->name }}</option>
                                    @endforeach
                                </select>
                                @error('observerHujan3')
                                    <div class="has-error">
                                        <span style="margin-right: 5px;"
                                            class="glyphicon glyphicon-remove form-control-feedback"
                                            aria-hidden="true"></span><label class="control-label" for="inputError2">The
                                            observer field is required.</label>
                                    </div>
                                    <script>
                                        $('#formHujan3').scrollTop(0);
                                    </script>
                                @enderror
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="" style="text-decoration: underline;">Hujan</label>
                            </div>
                            <div class="col-md-6>
                                <div class="row">
                                <div class="col-md-4">
                                    <label for="">CH</label>
                                </div>
                                <div class="col-md-2 ml-5 pr-0">
                                    <input class="form-control" type="number" step="any" min="0"
                                        name="" id="" wire:model="ch_hujan3">
                                    @error('ch_hujan3')
                                        <div class="has-error">
                                            <span style="margin-right: 5px;"
                                                class="glyphicon glyphicon-remove form-control-feedback"
                                                aria-hidden="true"></span><label class="control-label"
                                                for="inputError2">{{ $message }}</label>
                                        </div>
                                        <script>
                                            $('#formHujan3').scrollTop(0);
                                        </script>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary pull-right" wire:click.prevent="updateFormHujan3">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
