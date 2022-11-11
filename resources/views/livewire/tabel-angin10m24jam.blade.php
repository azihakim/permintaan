<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @include('livewire.form-angin10m24jam.modal-edit')
    @if ($clear == true)
        <button wire:click="clearFilter" class="btn btn-default">X Clear Filter</button>
    @endif
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="text-center" style="vertical-align: middle;width: 8%" rowspan="2">No.</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Observer</th>
                <th class="text-center" style="vertical-align: middle;" rowspan="2" colspan="">Aksi</th>
            </tr>
            <tr>
                <td>
                    <input class="form-control" type="date" wire:model="filterTanggal">
                </td>
                <td>
                    <select class="form-control" wire:model="filterObserver">
                        <option value="" selected hidden>Filter Observer</option>
                        @foreach ($observers as $observer)
                            <option value="{{ $observer->id }}">{{ $observer->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($pencatatan as $index => $item)
                <tr class="text-center" style="vertical-align: middle;">
                    <td>{{ $pencatatan->firstItem() + $index }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->users->name }}</td>
                    <td>
                        <a wire:click='editForm({{ $item->id }})' data-toggle='modal'
                            data-target='#editFormAngin-10m-24jam' class='btn btn-warning' style='float: none;'>Edit</a>
                        <a wire:click='deleteForm({{ $item->id }})' class='btn btn-danger'
                            style='float: none;'>Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                {{ $pencatatan->links('custom-pagination-links-view2') }}
            </tr>
        </tfoot>
    </table>
</div>
