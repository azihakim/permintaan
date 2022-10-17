<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <table class="table table-bordered tablesorter-bootstrap">
        <thead>
            <tr>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Waktu</th>
                <th class="text-center">Observer</th>
                <th class="text-center" style="vertical-align: middle;" rowspan="2" colspan="2">Aksi</th>
            </tr>
            <tr>
                <td><input class="form-control" type="date"></td>
                <td><select class="form-control">
                        <option value="">Filter Waktu</option>
                        <option value="07.01">07.01
                        </option>
                        <option value="07.31">07.31</option>
                    </select></td>
                <td><select class="form-control">
                        <option value="">Filter Observer</option>
                        <option value="Andi">Andi
                        </option>
                        <option value="Budi">Budi</option>
                    </select></td>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center" style="vertical-align: middle;">
                <td>12/10/2022</td>
                <td>07.01</td>
                <td>Andi</td>
                <td colspan="2" class="text-center;">
                    <a href="" class="btn btn-warning" style="float: none;">Edit</a>
                    <a href="" class="btn btn-danger" style="float: none;">Delete</a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="pager form-horizontal tablesorter-pager" data-column="0">
                    <button class="btn first disabled"><i class="fa fa-step-backward"></i></button>
                    <button class="btn prev disabled"><i class="fa fa-arrow-left"></i></button>
                    <span class="pagedisplay">1 - 10 / 57 (57)</span>
                    <!-- this can be any element, including an input -->
                    <button class="btn next"><i class="fa fa-arrow-right"></i></button>
                    <button class="btn last"><i class="fa fa-step-forward"></i></button>
                    <select class="pagesize input-xs" title="Select page size">
                        <option selected="selected" value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                    </select>
                    <select class="pagenum input-xs" title="Select page number">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
