@extends('layout.base')
@section('container')
<head>
<link rel="stylesheet" type="text/css" href="{!! asset('static/vendor/bootstrap/css/bootstrap.min.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('static/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('static/vendor/animate/animate.css') !!}"> 
<link rel="stylesheet" type="text/css" href="{!! asset('static/vendor/css-hamburgers/hamburgers.min.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('static/vendor/animsition/css/animsition.min.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('static/vendor/select2/select2.min.css') !!}"> 
<link rel="stylesheet" type="text/css" href="{!! asset('static/vendor/daterangepicker/daterangepicker.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('static/css/util.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('static/css/main.css') !!}">
</head>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">tambah data</li>
        </ol>
        tambahkan data
        <div class="row">
            <div class="card mb-4">
                <div class="card-body">
                {% if init == 'admin'%}
                {% for row in admin %}
                    <form method="post" action="/add/admin/" class="login100-form validate-form p-l-55 p-r-55 p-t-10">
                        <label>NIP</label><br>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
                            <input class="input100" type="text" name="nip" placeholder="nip" >
                            <span class="focus-input100"></span>
                        </div>
                        <label>Nama</label><br>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
                            <input class="input100" type="text" name="nama" ><br>
                            <label>Email</label><br>

                            <input class="input100" id="email" type="email" ><br>
                            <label>Jenis Kelamin</label><br>
                            <label><select id="gender" class="input100" >
                                    {% if row.3=='L'%}
                                    <option class="input100" value="L" selected>Laki-Laki</option>
                                    <option class="input100" value="P">Perempuan</option>
                                    {% endif %}
                                    {% if row.3=='P'%}
                                    <option class="input100" value="L">Laki-Laki</option>
                                    <option class="input100" value="P" selected>Perempuan</option>
                                    {% endif %}
                                </select></label><br>
                            <label>Tanggal Lahir</label><br>
                            <input class="input100" id="ttl" type="date"><br>
                            <label>Nomor Hp</label><br>
                            <input class="input100" id="no_hp" type="number"><br>
                            <label>Alamat</label><br>
                            <textarea class="input100" id="alamat">{{row.5}}</textarea><br>
                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn">
                                    Update
                                </button>
                            </div>
                    </form>
                {% endfor %}
                {% endif %}
                {% if init == 'hrd'%}
                {% for row in hrd %}
                <form method="post" action="/add/admin/" class="login100-form validate-form p-l-55 p-r-55 p-t-10">
                    <label>NIP</label><br>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
                        <input class="input100" type="text" name="nip" placeholder="nip">
                        <span class="focus-input100"></span>
                    </div>
                    <label>Nama</label><br>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
                        <input class="input100" type="text" name="nama" ><br>
                        <label>Email</label><br>

                        <input class="input100" id="email" type="email"><br>
                        <label>Jenis Kelamin</label><br>
                        <label><select id="gender" class="input100">
                                {% if row.3=='L'%}
                                <option class="input100" value="L" selected>Laki-Laki</option>
                                <option class="input100" value="P">Perempuan</option>
                                {% endif %}
                                {% if row.3=='P'%}
                                <option class="input100" value="L">Laki-Laki</option>
                                <option class="input100" value="P" selected>Perempuan</option>
                                {% endif %}
                            </select></label><br>
                        <label>Tanggal Lahir</label><br>
                        <input class="input100" id="ttl" type="date"><br>
                        <label>Nomor Hp</label><br>
                        <input class="input100" id="no_hp" type="number"><br>
                        <label>Alamat</label><br>
                        <textarea class="input100" id="alamat">{{row.5}}</textarea><br>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Update
                            </button>
                        </div>
                </form>
                {% endfor %}
                {% endif %}
                {% if init == 'karu'%}
                {% for row in karu %}
                <form method="post" action="/add/admin/" class="login100-form validate-form p-l-55 p-r-55 p-t-10">
                    <label>NIP</label><br>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
                        <input class="input100" type="text" name="nip" placeholder="nip" >
                        <span class="focus-input100"></span>
                    </div>
                    <label>Nama</label><br>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
                        <input class="input100" type="text" name="nama" ><br>
                        <label>Email</label><br>

                        <input class="input100" id="email" type="email" ><br>
                        <label>Jenis Kelamin</label><br>
                        <label><select id="gender" class="input100" >
                                {% if row.3=='L'%}
                                <option class="input100" value="L" selected>Laki-Laki</option>
                                <option class="input100" value="P">Perempuan</option>
                                {% endif %}
                                {% if row.3=='P'%}
                                <option class="input100" value="L">Laki-Laki</option>
                                <option class="input100" value="P" selected>Perempuan</option>
                                {% endif %}
                            </select></label><br>
                        <label>Tanggal Lahir</label><br>
                        <input class="input100" id="ttl" type="date" ><br>
                        <label>Nomor Hp</label><br>
                        <input class="input100" id="no_hp" type="number"><br>
                        <label>Alamat</label><br>
                        <textarea class="input100" id="alamat">{{row.5}}</textarea><br>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Update
                            </button>
                        </div>
                </form>
                {% endfor %}
                {% endif %}
                {% if init == 'karyawan'%}
                {% for row in karyawan %}
                <form method="post" action="/add/admin/" class="login100-form validate-form p-l-55 p-r-55 p-t-10">
                    <label>NIP</label><br>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
                        <input class="input100" type="text" name="nip" placeholder="nip" >
                        <span class="focus-input100"></span>
                    </div>
                    <label>Nama</label><br>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
                        <input class="input100" type="text" name="nama" ><br>
                        <label>Email</label><br>

                        <input class="input100" id="email" type="email" ><br>
                        <label>Jenis Kelamin</label><br>
                        <label><select id="gender" class="input100" >
                                {% if row.3=='L'%}
                                <option class="input100" value="L" selected>Laki-Laki</option>
                                <option class="input100" value="P">Perempuan</option>
                                {% endif %}
                                {% if row.3=='P'%}
                                <option class="input100" value="L">Laki-Laki</option>
                                <option class="input100" value="P" selected>Perempuan</option>
                                {% endif %}
                            </select></label><br>
                        <label>Tanggal Lahir</label><br>
                        <input class="input100" id="ttl" type="date" ><br>
                        <label>Nomor Hp</label><br>
                        <input class="input100" id="no_hp" type="number" ><br>
                        <label>Alamat</label><br>
                        <textarea class="input100" id="alamat">{{row.5}}</textarea><br>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Update
                            </button>
                        </div>
                </form>
                {% endfor %}
                {% endif %}
                {% if init == 'jadwal'%}
                {% for row in jadwal %}
                <form method="post" action="/add/admin/" class="login100-form validate-form p-l-55 p-r-55 p-t-10">
                    <label>NIP</label><br>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
                        <input class="input100" type="text" name="nip" placeholder="nip" >
                        <span class="focus-input100"></span>
                    </div>
                    <label>Nama</label><br>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
                        <input class="input100" type="text" name="nama" ><br>
                        <label>Email</label><br>

                        <input class="input100" id="email" type="email" ><br>
                        <label>Jenis Kelamin</label><br>
                        <label><select id="gender" class="input100" >
                                {% if row.3=='L'%}
                                <option class="input100" value="L" selected>Laki-Laki</option>
                                <option class="input100" value="P">Perempuan</option>
                                {% endif %}
                                {% if row.3=='P'%}
                                <option class="input100" value="L">Laki-Laki</option>
                                <option class="input100" value="P" selected>Perempuan</option>
                                {% endif %}
                            </select></label><br>
                        <label>Tanggal Lahir</label><br>
                        <input class="input100" id="ttl" type="date"><br>
                        <label>Nomor Hp</label><br>
                        <input class="input100" id="no_hp" type="number"><br>
                        <label>Alamat</label><br>
                        <textarea class="input100" id="alamat">{{row.5}}</textarea><br>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Update
                            </button>
                        </div>
                </form>
                {% endfor %}
                {% endif %}
                {% if init == 'shift'%}
                {% for row in shift %}
                <form method="post" action="/add/admin/" class="login100-form validate-form p-l-55 p-r-55 p-t-10">
                    <label>NIP</label><br>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
                        <input class="input100" type="text" name="nip" placeholder="nip" >
                        <span class="focus-input100"></span>
                    </div>
                    <label>Nama</label><br>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
                        <input class="input100" type="text" name="nama" ><br>
                        <label>Email</label><br>

                        <input class="input100" id="email" type="email" ><br>
                        <label>Jenis Kelamin</label><br>
                        <label><select id="gender" class="input100" >
                                {% if row.3=='L'%}
                                <option class="input100" value="L" selected>Laki-Laki</option>
                                <option class="input100" value="P">Perempuan</option>
                                {% endif %}
                                {% if row.3=='P'%}
                                <option class="input100" value="L">Laki-Laki</option>
                                <option class="input100" value="P" selected>Perempuan</option>
                                {% endif %}
                            </select></label><br>
                        <label>Tanggal Lahir</label><br>
                        <input class="input100" id="ttl" type="date" ><br>
                        <label>Nomor Hp</label><br>
                        <input class="input100" id="no_hp" type="number" ><br>
                        <label>Alamat</label><br>
                        <textarea class="input100" id="alamat">{{row.5}}</textarea><br>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Update
                            </button>
                        </div>
                </form>
                {% endfor %}
                {% endif %}
            </div>
            </div>
        </div>
    </div>
</main>

<script src="{!! asset('static/vendor/jquery/jquery-3.2.1.min.js') !!}"></script>
<script src="{!! asset('static/vendor/animsition/js/animsition.min.js') !!}"></script>
<script src="{!! asset('static/vendor/bootstrap/js/popper.js') !!}"></script>
<script src="{!! asset('static/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('static/vendor/select2/select2.min.js') !!}"></script>
<script src="{!! asset('static/vendor/daterangepicker/moment.min.js') !!}"></script>
<script src="{!! asset('static/vendor/daterangepicker/daterangepicker.js') !!}"></script>
<script src="{!! asset('static/vendor/countdowntime/countdowntime.js') !!}"></script>
<script src="{!! asset('static/js/main.js') !!}"></script>
@endsection