<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @include('livewire.form1.modal-edit')
    @include('livewire.form2.modal-edit')
    @include('livewire.form3.modal-edit')
    @include('livewire.form4.modal-edit')
    @include('livewire.form5.modal-edit')
    @include('livewire.form6.modal-edit')
    @include('livewire.form7.modal-edit')
    @include('livewire.form-hujan1.modal-edit')
    @include('livewire.form-hujan2.modal-edit')
    @include('livewire.form-hujan3.modal-edit')
    @if ($clear == true)
        <button wire:click="clearFilter" class="btn btn-default">X Clear Filter</button>
    @endif
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="text-center" style="vertical-align: middle;width: 8%" rowspan="2">No.</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Waktu</th>
                <th class="text-center">Observer</th>
                <th class="text-center" style="vertical-align: middle;" rowspan="2" colspan="2">Aksi</th>
            </tr>
            <tr>
                <td>
                    <input class="form-control" type="date" wire:model="filterTanggal">
                </td>
                <td>
                    <select class="form-control" wire:model="filterWaktu">
                        <option value="" selected hidden>Filter Waktu</option>
                        <option value="07.01">07.01</option>
                        <option value="07.31">07.31</option>
                        <option value="10.01">10.01</option>
                        <option value="13.01">13.01</option>
                        <option value="13.31">13.31</option>
                        <option value="14.01">14.01</option>
                        <option value="16.01">16.01</option>
                        <option value="17.31">17.31</option>
                        <option value="18.01">18.01</option>
                        <option value="19.01">19.01</option>
                    </select>
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
                    <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
                    <td>{{ $item->waktu }}</td>
                    <td>{{ $item->users->name }}</td>
                    <td colspan="2" class="text-center;">
                        @php
                            switch ($item->waktu) {
                                case '07.01':
                                    echo "<a wire:click='editForm1($item->id)' data-toggle='modal' data-target='#editForm1' class='btn btn-warning' style='float: none;'>Edit</a>
                                        <a wire:click='deleteForm1($item->id)' class='btn btn-danger' style='float: none;'>Delete</a>";
                                    break;
                                case '07.31':
                                    echo "<a wire:click='editForm2($item->id)' data-toggle='modal' data-target='#editForm2' class='btn btn-warning' style='float: none;'>Edit</a>
                                        <a wire:click='deleteForm2($item->id)' class='btn btn-danger' style='float: none;'>Delete</a>";
                                    break;
                                case '10.01':
                                    echo "<a wire:click='editFormHujan1($item->id)' data-toggle='modal' data-target='#editFormHujan1' class='btn btn-warning' style='float: none;'>Edit</a>
                                        <a wire:click='deleteFormHujan1($item->id)' class='btn btn-danger' style='float: none;'>Delete</a>";
                                    break;
                                case '13.01':
                                    echo "<a wire:click='editForm3($item->id)' data-toggle='modal' data-target='#editForm3' class='btn btn-warning' style='float: none;'>Edit</a>
                                        <a wire:click='deleteForm3($item->id)' class='btn btn-danger' style='float: none;'>Delete</a>";
                                    break;
                                case '13.31':
                                    echo "<a wire:click='editForm4($item->id)' data-toggle='modal' data-target='#editForm4' class='btn btn-warning' style='float: none;'>Edit</a>
                                        <a wire:click='deleteForm4($item->id)' class='btn btn-danger' style='float: none;'>Delete</a>";
                                    break;
                                case '14.01':
                                    echo "<a wire:click='editForm5($item->id)' data-toggle='modal' data-target='#editForm5' class='btn btn-warning' style='float: none;'>Edit</a>
                                        <a wire:click='deleteForm5($item->id)' class='btn btn-danger' style='float: none;'>Delete</a>";
                                    break;
                                case '16.01':
                                    echo "<a wire:click='editFormHujan2($item->id)' data-toggle='modal' data-target='#editFormHujan2' class='btn btn-warning' style='float: none;'>Edit</a>
                                        <a wire:click='deleteFormHujan2($item->id)' class='btn btn-danger' style='float: none;'>Delete</a>";
                                    break;
                                case '17.31':
                                    echo "<a wire:click='editForm6($item->id)' data-toggle='modal' data-target='#editForm6' class='btn btn-warning' style='float: none;'>Edit</a>
                                        <a wire:click='deleteForm6($item->id)' class='btn btn-danger' style='float: none;'>Delete</a>";
                                    break;
                                case '18.01':
                                    echo "<a wire:click='editForm7($item->id)' data-toggle='modal' data-target='#editForm7' class='btn btn-warning' style='float: none;'>Edit</a>
                                        <a wire:click='deleteForm7($item->id)' class='btn btn-danger' style='float: none;'>Delete</a>";
                                    break;
                                case '19.01':
                                    echo "<a wire:click='editFormHujan3($item->id)' data-toggle='modal' data-target='#editFormHujan3' class='btn btn-warning' style='float: none;'>Edit</a>
                                        <a wire:click='deleteFormHujan3($item->id)' class='btn btn-danger' style='float: none;'>Delete</a>";
                                    break;
                            }
                        @endphp
                    </td>
                </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                {{ $pencatatan->links('custom-pagination-links-view') }}
            </tr>
        </tfoot>
    </table>
</div>
