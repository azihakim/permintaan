<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="pull-right" style="width:340px;margin-top:10px; padding:0 0 5px 10px;">
        <div class="col-md-5 p-0">
            <input type="date" name="" id="" class="form-control" wire:model="tanggal">
        </div>
        <div class="col-md-3 px-5 mt-5">
            <select name="" id="" class="form-control" wire:model="waktu">
                <option value="" selected="" hidden="">Waktu</option>
                <option value="form1">07.01</option>
                <option value="form2">07.31</option>
                <option value="formHujan1">10.01</option>
                <option value="form3">13.01</option>
                <option value="form4">13.31</option>
                <option value="form5">14.01</option>
                <option value="formHujan2">16.01</option>
                <option value="form6">17.31</option>
                <option value="form7">18.01</option>
                <option value="formHujan3">19.01</option>
            </select>
        </div>
        @if ($tanggal != '' && $waktu != '')
            <div class="col-md-4 p-0 mt-5">
                <a href="" class="btn btn-default" data-toggle="modal" data-target="#{{ $waktu }}"
                    data-tanggal="{{ $tanggal }}">Tambah
                    +</a>
            </div>
        @endif
    </div>
    @include('livewire.form1.modal-add')
    @include('livewire.form2.modal-add')
    @include('livewire.form3.modal-add')
    @include('livewire.form4.modal-add')
    @include('livewire.form5.modal-add')
    @include('livewire.form6.modal-add')
    @include('livewire.form7.modal-add')
</div>
