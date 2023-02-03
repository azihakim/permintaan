@extends('layout.user')
@section('content')
    <div id="container-signup" class="clearfix">
        <div id="login-box">
            <div class="login-box-inner clearfix">
                <header id="login-header">
                    <h1 class="bold">Daftar Akun</h1>
                </header>
                <form id="form-signup" action="#">
                    <div class="spacer-20"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="fcid-1">Nama</label>
                        </div>
                        <div class="col-lg-8">
                            <input aria-required="true" required="" class="form-control required" type="text"
                                placeholder="Nama" id="fcid-1">
                        </div>
                    </div>
                    <div class="spacer-15"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="fcid-2">Kategori</label>
                        </div>
                        <div class="col-lg-8">
                            <select required class="form-control" onchange="toggle(this.value)">
                                <option value="">Pilih kategori</option>
                                <option value="Umum">Umum</option>
                                <option value="Swasta">Swasta</option>
                                <option value="Pemerintahan Daerah">Pemerintahan Daerah</option>
                                <option value="Akademisi">Akademisi</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Peneliti">Peneliti</option>
                                <option value="Instansi Vertikal">Instansi Vertikal</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div id="desk"></div>
                    <div class="spacer-15"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label>No. Whatsapp</label>
                        </div>
                        <div class="col-lg-8">
                            <input aria-required="true" required="" class="form-control required" type="number"
                                placeholder="Nomor Whatsapp">
                        </div>
                    </div>
                    <div class="spacer-15"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Email</label>
                        </div>
                        <div class="col-lg-8">
                            <input aria-required="true" required="" class="form-control required" type="email"
                                name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="spacer-15"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Password</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="showpassword-wrap"><input class="form-control" type="password"
                                    placeholder="Password" id="fc-id-2" tabindex="2"><input
                                    class="form-control showpassword-hint" type="text">
                            </div>
                            <a href="#" id="showpassword-trigger" class="underline">Show password</a>
                        </div>
                    </div>
                    <div class="spacer-15"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label>KTP</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="file" class="required" accept="image/png, image/jpeg">
                            <div class="helper-text-box">
                                <div class="form-helper-header">Format
                                    file:<code>.png, .jpeg</code>
                                </div>
                                <div class="helper-text-box">
                                    <div class="form-helper">disarankan sensor bagian NIK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default btn-lg pull-right">Daftar</button>
                </form>
            </div>
        </div>
    </div>
<script>
    // toggle deskripsi kategori
    const div_desk = document.getElementById("desk");
    function toggle(value) {
        if(value == "Instansi Vertikal" || value == "Lainnya"){
            $('#field_deskripsi').remove();
            var newField = document.createElement("div");
            newField.setAttribute("id", "field_deskripsi");
            newField.innerHTML = '<div class="spacer-15"></div>\
                        <div class="row">\
                            <div class="col-lg-4">\
                                <label for="fcid-1">Deskripsi</label>\
                            </div>\
                            <div class="col-lg-8">\
                                <input aria-required="true" required="" class="form-control required" type="text"\
                                    placeholder="Deskripsi Kategori" id="">\
                            </div>\
                        </div>';
                        div_desk.append(newField);   
        }else {
            $('#field_deskripsi').remove();
        }
    }
</script>
@endsection