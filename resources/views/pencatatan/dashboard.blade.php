@extends('layout.master')

@section('title', 'Dashboard Pencatatan Cuaca')
@section('breadcrumb', 'Dashboard')
@section('sub-breadcrumb', 'dashboard')
@section('breadcrumb-active', 'active')
@section('fa-caret-down', 'fa-caret-left')
@section('section-active', 'active-page')

@section('contents-pencatatan')
    <div>
        <div class="row ext-raster">
            <div class="col-sm-12">
                <div class="grouped raster-4-blocks">
                    <div class="duo-val-block">
                        <span class="font-big">{{ $totalAgromet }}</span>
                        <span class="font-small">Total Pencatatan Agromet</span>
                    </div><!-- End .duo-val-block -->
                    <div class="duo-val-block">
                        <span class="font-big">{{ $totalAngin }}</span>
                        <span class="font-small">Total Pencatatan Angin 10 M 24 Jam</span>
                    </div><!-- End .duo-val-block -->
                    <div class="duo-val-block">
                        <span class="font-big">{{ $totalLamaPenyinaran }}</span>
                        <span class="font-small">Total Pencatatan Lama Penyinaran</span>
                    </div><!-- End .duo-val-block -->
                    <div class="duo-val-block">
                        <span class="font-big">{{ $totalLysimeter }}</span>
                        <span class="font-small">Total Pencatatan Lysimeter</span>
                    </div><!-- End .duo-val-block -->
                </div>
            </div>
        </div>

        <div class="spacer-10"></div>
        <div class="spacer-10"></div>

        <div class="row">
            <div class="col-sm-12">
                <h4>Pencatatan Agromet hari ini {{ date('d-M-Y') }}</h4>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-12">
                <div class="project-block">
                    <header>
                        <h3>Jam 07.01</h3>
                    </header>
                    <footer>
                        <div class="pull-left">
                            Status:
                        </div>
                        <div class="pull-right">
                            @if ($jam0701 != null)
                                <span class="label label-success">Sudah Dicatat</span>
                            @else
                                <span class="label label-danger">Belum Dicatat</span>
                            @endif
                        </div>
                    </footer>
                </div>

                <div class="project-block">
                    <header>
                        <h3>Jam 07.31</h3>
                    </header>
                    <footer>
                        <div class="pull-left">
                            Status:
                        </div>
                        <div class="pull-right">
                            @if ($jam0731 != null)
                                <span class="label label-success">Sudah Dicatat</span>
                            @else
                                <span class="label label-danger">Belum Dicatat</span>
                            @endif
                        </div>
                    </footer>
                </div>

                <div class="project-block">
                    <header>
                        <h3>Jam 10.01</h3>
                    </header>
                    <footer>
                        <div class="pull-left">
                            Status:
                        </div>
                        <div class="pull-right">
                            @if ($jam1001 != null)
                                <span class="label label-success">Sudah Dicatat</span>
                            @else
                                <span class="label label-danger">Belum Dicatat</span>
                            @endif
                        </div>
                    </footer>
                </div>

                <div class="project-block">
                    <header>
                        <h3>Jam 13.01</h3>
                    </header>
                    <footer>
                        <div class="pull-left">
                            Status:
                        </div>
                        <div class="pull-right">
                            @if ($jam1301 != null)
                                <span class="label label-success">Sudah Dicatat</span>
                            @else
                                <span class="label label-danger">Belum Dicatat</span>
                            @endif
                        </div>
                    </footer>
                </div>

                <div class="project-block">
                    <header>
                        <h3>Jam 13.31</h3>
                    </header>
                    <footer>
                        <div class="pull-left">
                            Status:
                        </div>
                        <div class="pull-right">
                            @if ($jam1331 != null)
                                <span class="label label-success">Sudah Dicatat</span>
                            @else
                                <span class="label label-danger">Belum Dicatat</span>
                            @endif
                        </div>
                    </footer>
                </div>

                <div class="project-block">
                    <header>
                        <h3>Jam 14.01</h3>
                    </header>
                    <footer>
                        <div class="pull-left">
                            Status:
                        </div>
                        <div class="pull-right">
                            @if ($jam1401 != null)
                                <span class="label label-success">Sudah Dicatat</span>
                            @else
                                <span class="label label-danger">Belum Dicatat</span>
                            @endif
                        </div>
                    </footer>
                </div>

                <div class="project-block">
                    <header>
                        <h3>Jam 16.01</h3>
                    </header>
                    <footer>
                        <div class="pull-left">
                            Status:
                        </div>
                        <div class="pull-right">
                            @if ($jam1601 != null)
                                <span class="label label-success">Sudah Dicatat</span>
                            @else
                                <span class="label label-danger">Belum Dicatat</span>
                            @endif
                        </div>
                    </footer>
                </div>

                <div class="project-block">
                    <header>
                        <h3>Jam 17.31</h3>
                    </header>
                    <footer>
                        <div class="pull-left">
                            Status:
                        </div>
                        <div class="pull-right">
                            @if ($jam1731 != null)
                                <span class="label label-success">Sudah Dicatat</span>
                            @else
                                <span class="label label-danger">Belum Dicatat</span>
                            @endif
                        </div>
                    </footer>
                </div>

                <div class="project-block">
                    <header>
                        <h3>Jam 18.01</h3>
                    </header>
                    <footer>
                        <div class="pull-left">
                            Status:
                        </div>
                        <div class="pull-right">
                            @if ($jam1801 != null)
                                <span class="label label-success">Sudah Dicatat</span>
                            @else
                                <span class="label label-danger">Belum Dicatat</span>
                            @endif
                        </div>
                    </footer>
                </div>

                <div class="project-block">
                    <header>
                        <h3>Jam 19.01</h3>
                    </header>
                    <footer>
                        <div class="pull-left">
                            Status:
                        </div>
                        <div class="pull-right">
                            @if ($jam1901 != null)
                                <span class="label label-success">Sudah Dicatat</span>
                            @else
                                <span class="label label-danger">Belum Dicatat</span>
                            @endif
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
@endsection
