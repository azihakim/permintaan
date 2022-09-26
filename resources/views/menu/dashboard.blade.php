@extends('layout.master')
@section('menu-title', 'Dashboard')
@section('dashboard', 'page-arrow active-page')
@section('content')
    <div class="inner-padding">
        <div class="row">
            <div class="col-sm-12">
                <div class="dropdown">
                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                        Tambah Permintaan
                        <i class="fa fa-plus-square"></i>
                    </a>
                    <ul role="menu" class="dropdown-menu">
                        <li>
                            <a href="{{ url('penanggulangan-bencana') }}">Kegiatan Penanggulangan Bencana</a>
                        </li>
                        <li>
                            <a href="{{ url('pendidikan') }}">Kegiatan Pendidikan/Penelitian non Komersil</a>
                        </li>
                        <li>
                            <a href="{{ url('pemerintahan') }}">Kegiatan Pemerintahan Pusat atau Daerah</a>
                        </li>
                        <li>
                            <a href="{{ url('pertahanan-keamanan') }}">Kegiatan Pertahanan dan Keamanan</a>
                        </li>
                        <li>
                            <a href="{{ url('keagamaan') }}">Kegiatan Keagamaan</a>
                        </li>
                        <li>
                            <a href="{{ url('sosial') }}">Kegiatan Sosial</a>
                        </li>
                        <li>
                            <a href="{{ url('layanan-bertarif') }}">Kegiatan Bertarif</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <table class="table tablesorter" id="tablesorting-1">
            <colgroup>
                <col style="width: 17.4%;">
                <col style="width: 17.4%;">
                <col style="width: 17.4%;">
                <col style="width: 17.4%;">
                <col style="width: 17.4%;">
            </colgroup>
            <thead>
                <tr class="tablesorter-headerRow">
                    <th data-column="0" class="tablesorter-header" tabindex="0" unselectable="on"
                        style="user-select: none;">
                        <div class="tablesorter-wrapper" style="position:relative;height:100%;width:100%">
                            <div class="tablesorter-header-inner">Rendering engine</div>
                        </div>
                    </th>
                    <th class="filter-select filter-exact tablesorter-header bootstrap-header" data-placeholder="Browsers"
                        data-column="1" tabindex="0" unselectable="on" style="user-select: none;">
                        <div class="tablesorter-wrapper" style="position:relative;height:100%;width:100%">
                            <div class="tablesorter-header-inner">Browser</div>
                        </div>
                    </th>
                    <th data-column="2" class="tablesorter-header bootstrap-header" tabindex="0" unselectable="on"
                        style="user-select: none;">
                        <div class="tablesorter-wrapper" style="position:relative;height:100%;width:100%">
                            <div class="tablesorter-header-inner">Platform(s)</div>
                        </div>
                    </th>
                    <th data-column="3" class="tablesorter-header bootstrap-header" tabindex="0" unselectable="on"
                        style="user-select: none;">
                        <div class="tablesorter-wrapper" style="position:relative;height:100%;width:100%">
                            <div class="tablesorter-header-inner">Engine version</div>
                        </div>
                    </th>
                    <th data-column="4" class="tablesorter-header bootstrap-header" tabindex="0" unselectable="on"
                        style="user-select: none;">
                        <div class="tablesorter-wrapper" style="position:relative;height:100%;width:100%">
                            <div class="tablesorter-header-inner">CSS grade</div>
                        </div>
                    </th>
                </tr>

            </thead>
            <tbody>
                <tr class="odd">
                    <td>Trident</td>
                    <td>Internet Explorer 4.0</td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                </tr>
                <tr class="even">
                    <td>Trident</td>
                    <td>Internet Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                </tr>
                <tr class="odd">
                    <td>Trident</td>
                    <td>Internet Explorer 5.5</td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                </tr>
                <tr class="even">
                    <td>Trident</td>
                    <td>Internet Explorer 6</td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>A</td>
                </tr>
                <tr class="odd">
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>A</td>
                </tr>
                <tr class="even">
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    <td>A</td>
                </tr>
                <tr class="odd">
                    <td>Gecko</td>
                    <td>firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>A</td>
                </tr>
                <tr class="even">
                    <td>Gecko</td>
                    <td>firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr class="odd">
                    <td>Gecko</td>
                    <td>firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr class="even">
                    <td>Gecko</td>
                    <td>firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td>1.7</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td>1.7</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.1</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.2</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.3</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.4</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Gecko</td>
                    <td>Mozilla 1.5</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.5</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Gecko</td>
                    <td>Mozilla 1.6</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.6</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Gecko</td>
                    <td>Mozilla 1.7</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.7</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Gecko</td>
                    <td>Mozilla 1.8</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Gecko</td>
                    <td>Seamonkey 1.1</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Gecko</td>
                    <td>Epiphany 2.20</td>
                    <td>Gnome</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td>125.5</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Webkit</td>
                    <td>Safari 1.3</td>
                    <td>OSX.3</td>
                    <td>312.8</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Webkit</td>
                    <td>Safari 2.0</td>
                    <td>OSX.4+</td>
                    <td>419.3</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Webkit</td>
                    <td>Safari 3.0</td>
                    <td>OSX.4+</td>
                    <td>522.1</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Webkit</td>
                    <td>OmniWeb 5.5</td>
                    <td>OSX.4+</td>
                    <td>420</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Webkit</td>
                    <td>iPod Touch / iPhone</td>
                    <td>iPod</td>
                    <td>420.1</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Webkit</td>
                    <td>S60</td>
                    <td>S60</td>
                    <td>413</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Presto</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Presto</td>
                    <td>Opera 7.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Presto</td>
                    <td>Opera 8.0</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Presto</td>
                    <td>Opera 8.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Presto</td>
                    <td>Opera 9.0</td>
                    <td>Win 95+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Presto</td>
                    <td>Opera 9.2</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Presto</td>
                    <td>Opera 9.5</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Presto</td>
                    <td>Opera for Wii</td>
                    <td>Wii</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Presto</td>
                    <td>Nokia N800</td>
                    <td>N800</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Presto</td>
                    <td>Nintendo DS browser</td>
                    <td>Nintendo DS</td>
                    <td>8.5</td>
                    <td>C/A<sup>1</sup></td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>KHTML</td>
                    <td>Konqureror 3.1</td>
                    <td>KDE 3.1</td>
                    <td>3.1</td>
                    <td>C</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>KHTML</td>
                    <td>Konqureror 3.3</td>
                    <td>KDE 3.3</td>
                    <td>3.3</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>KHTML</td>
                    <td>Konqureror 3.5</td>
                    <td>KDE 3.5</td>
                    <td>3.5</td>
                    <td>A</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td>Mac OS 8-9</td>
                    <td>-</td>
                    <td>X</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td>Mac OS 7.6-9</td>
                    <td>1</td>
                    <td>C</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td>Mac OS 8-X</td>
                    <td>1</td>
                    <td>C</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Misc</td>
                    <td>Netfront 3.1</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>C</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Misc</td>
                    <td>Netfront 3.4</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Misc</td>
                    <td>Dillo 0.8</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>X</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Misc</td>
                    <td>Links</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>X</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>X</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td>-</td>
                    <td>C</td>
                </tr>
                <tr class="even" style="display: none;">
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td>-</td>
                    <td>C</td>
                </tr>
                <tr class="odd" style="display: none;">
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
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

@endsection
