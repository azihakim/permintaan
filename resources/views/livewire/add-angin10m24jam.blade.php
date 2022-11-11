<div>
    {{-- Do your work, then step back. --}}
    <div class="pull-right" style="width:340px;margin-top:10px; padding:0 0 5px 10px;">
        <div class="col-md-3"></div>
        <div class="col-md-5 p-0">
            <input type="date" name="" id="" class="form-control" wire:model="tanggal">
        </div>
        <div class="col-md-4 px-5 mt-5">
            @if ($tanggal !== null)
                <a href="" class="btn btn-default m-0" data-toggle="modal" data-target="#angin-10m-24jam"
                    data-tanggal="{{ $tanggal }}">Tambah
                    +</a>
            @else
                <a href="" class="btn btn-disable m-0" data-toggle="modal" data-target="#">Tambah
                    +</a>
            @endif

        </div>
    </div>
    @include('livewire.form-angin10m24jam.modal-add')
</div>
