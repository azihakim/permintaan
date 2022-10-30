@extends('layout.formulir')
@section('form-title', 'Kegiatan Pendidikan dan Penelitian non Komersial')

@section('datadiri')
    <div class="row">
        <div class="col-sm-3">
            <h4 class="bold">Data diri</h4>
        </div>
    </div>
    <div class="spacer-10"></div>
    <div class="row">
        <div class="col-sm-3">
            <label>Nama</label>
        </div>
        <div class="col-sm-9">
            <input type="text" aria-required="true" name="nama" required="" class="form-control ">
        </div>
    </div>
    <div class="spacer-10"></div>
    <div class="row">
        <div class="col-sm-3">
            <label>NIK</label>
        </div>
        <div class="col-sm-9">
            <input type="text" aria-required="true" name="nil" required="" class="form-control ">
        </div>
    </div>
    <div class="spacer-10"></div>
    <div class="row">
        <div class="col-sm-3">
            <label>Asal instansi</label>
        </div>
        <div class="col-sm-9">
            <input type="text" aria-required="true" name="instansi" required="" class="form-control">
        </div>
    </div>
    <div class="spacer-10"></div>
    <div class="row">
        <div class="col-sm-3">
            <label>Nomor telepon</label>
        </div>
        <div class="col-sm-9">
            <input type="telepon" name="telepon" class="form-control">
        </div>
    </div>
    <div class="spacer-10"></div>
    <div class="row">
        <div class="col-sm-3">
            <label>Email</label>
        </div>
        <div class="col-sm-9">
            <input type="email" name="email" class="form-control">
        </div>
    </div>
@endsection

@section('syarat')
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold">Syarat permohonan data</h4>
        </div>
    </div>
    <div class="spacer-10"></div>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                <label>Identitas diri KTP/KTM/SIM/Paspor</label>
            </div>
            <div class="col-sm-6">
                <input type="file">
                <div class="helper-text-box">
                    <div class="form-helper-header">Nama
                        file:<code>KTP/KTM/SIM_Nama</code>
                    </div>
                </div>
            </div>
        </div>

        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-6">
                <label>Proposal Penelitian berisi maksud dan tujuan penelitian yang
                    telah
                    disetujui oleh pembimbing atau promotor</label>
            </div>
            <div class="col-sm-6">
                <input type="file" accept="application/pdf" name="proposal_penelitian">
                <div class="helper-text-box">
                    <div class="form-helper-header">Nama
                        file:<code>Proposal_Nama</code>
                    </div>
                    <div class="form-helper-header">Format
                        file:<code>.pdf</code>
                    </div>
                </div>
            </div>
        </div>

        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-6">
                <label>Surat Pengantar dari Kepala Sekolah / Rektor / Dekan (sesuai form
                    A)</label>
            </div>
            <div class="col-sm-6">
                <input type="file" accept="application/pdf" name="surat_pengantar">
                <div class="helper-text-box">
                    <div class="form-helper-header">Nama file:<code>FormA_Nama</code>
                        <div class="form-helper-header">Format
                            file:<code>.pdf</code>
                        </div>
                        <a download href="../../storage/templateForm/formA.jpeg">
                            <p class="text-primary btn-link">Klik download contoh
                                form
                                A</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-6">
                <label>Surat Pernyataan tidak digunakan untuk kepentingan lain dan
                    kesediaan
                    menyerahkan salinan hasil penelitian dengan batas waktu tertentu
                    sesuai
                    form B</label>
            </div>
            <div class="col-sm-6">
                <input type="file" accept="application/pdf" name="surat_pernyataan">
                <div class="helper-text-box">
                    <div class="form-helper-header">Nama file:<code>FormB_Nama</code>
                        <div class="form-helper-header">Format
                            file:<code>.pdf</code>
                        </div>
                        <a download href="../../storage/templateForm/formB.pdf">
                            <p class="text-primary btn-link">Klik download contoh
                                form
                                B</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
