@extends('layout.base')
@section('container')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Laporan Absensi</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Laporan Absen</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header" style="background-color: #E6B794;">
                <i class="fas fa-table me-1"></i>
                Data Absensi
            </div>
            <div class="card-body">
                <div class="dataTable-top">
                    <div class="dataTable-dropdown"><label><select id="ruangan" onclick="RUANGAN()"
                                class="dataTable-selector">
                                <option value="melati">Melati</option>
                                <option value="dahlia">Dahlia</option>
                                <option value="anggrek">Anggrek</option>
                                <option value="bougenvile">Bougenvile</option>
                                <option value="mawar">Mawar</option>
                                <option value="IT">IT</option>
                                <option value="semua">Semua</option>
                            </select> pilih ruangan</label>
                    </div>
                    <div></div>
                </div>
                <div id="melati" class="dataTable-container" style="display:none">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">NIP</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Nama</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Ruangan</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Shift</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Latitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Longitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Foto</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Tanggal</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Waktu</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Status</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                {% for row in dataabsen %}
                                {% if row.3 == 'melati'%}
                                <tr>
                                    <td>{{ row.1 }}</td>
                                    <td>{{ row.2 }}</td>
                                    <td>{{ row.3 }}</td>
                                    <td>{{ row.4 }}</td>
                                    <td>{{ row.5 }}</td>
                                    <td>{{ row.6 }}</td>
                                    <td><img src="../../static/assets/absen/{{ row.7 }}" width="100px" height="100px"></td>
                                    <td>{{ row.8 }}</td>
                                    <td>{{ row.9 }}</td>
                                {% if row.10=='tepat waktu'%}
                                <td style="color: green;">{{ row.10 }}</td>
                                {% endif %}
                                {% if row.10=='telat'%}
                                <td style="color: red;">{{ row.10 }}</td>
                                {% endif %}
                            </tr>
                                    {% endif %}
                                    {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div id="dahlia" class="dataTable-container" style="display:none">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">NIP</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Nama</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Ruangan</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Shift</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Latitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Longitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Foto</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Tanggal</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Waktu</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Status</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                {% for row in dataabsen %}
                                {% if row.3=='dahlia'%}
                                <tr>
                                    <td>{{ row.1 }}</td>
                                    <td>{{ row.2 }}</td>
                                    <td>{{ row.3 }}</td>
                                    <td>{{ row.4 }}</td>
                                    <td>{{ row.5 }}</td>
                                    <td>{{ row.6 }}</td>
                                    <td><img src="../../static/assets/absen/{{ row.7 }}" width="100px" height="100px"></td>
                                    <td>{{ row.8 }}</td>
                                    <td>{{ row.9 }}</td>
                                {% if row.10=='tepat waktu'%}
                                <td style="color: green;">{{ row.10 }}</td>
                                {% endif %}
                                {% if row.10=='telat'%}
                                <td style="color: red;">{{ row.10 }}</td>
                                {% endif %}
                            </tr>
                                {% endif %}
                                {% endfor %}
                        </tbody>
                    </table>

                </div>
                <div id="anggrek" style="display:none" class="dataTable-container">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">NIP</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Nama</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Ruangan</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Shift</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Latitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Longitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Foto</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">tanggal</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Waktu</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Status</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                {% for row in dataabsen %}
                                {% if row.3=='anggrek'%}
                                <tr>
                                    <td>{{ row.1 }}</td>
                                    <td>{{ row.2 }}</td>
                                    <td>{{ row.3 }}</td>
                                    <td>{{ row.4 }}</td>
                                    <td>{{ row.5 }}</td>
                                    <td>{{ row.6 }}</td>
                                    <td><img src="../../static/assets/absen/{{ row.7 }}" width="100px" height="100px"></td>
                                    <td>{{ row.8 }}</td>
                                    <td>{{ row.9 }}</td>
                                {% if row.10=='tepat waktu'%}
                                <td style="color: green;">{{ row.10 }}</td>
                                {% endif %}
                                {% if row.10=='telat'%}
                                <td style="color: red;">{{ row.10 }}</td>
                                {% endif %}
                                </tr>
                                    {% endif %}
                                    {% endfor %}
                            
                        </tbody>
                    </table>
                </div>
                <div id="bougenvile" class="dataTable-container" style="display:none">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">NIP</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Nama</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Ruangan</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Shift</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Latitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Longitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Foto</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">tanggal</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Waktu</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Status</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                {% for row in dataabsen %}
                                {% if row.3=='bougenvile'%}
                                <tr>
                                    <td>{{ row.1 }}</td>
                                    <td>{{ row.2 }}</td>
                                    <td>{{ row.3 }}</td>
                                    <td>{{ row.4 }}</td>
                                    <td>{{ row.5 }}</td>
                                    <td>{{ row.6 }}</td>
                                    <td><img src="../../static/assets/absen/{{ row.7 }}" width="100px" height="100px"></td>
                                    <td>{{ row.8 }}</td>
                                    <td>{{ row.9 }}</td>
                                {% if row.10=='tepat waktu'%}
                                <td style="color: green;">{{ row.10 }}</td>
                                {% endif %}
                                {% if row.10=='telat'%}
                                <td style="color: red;">{{ row.10 }}</td>
                                {% endif %}
                            </tr>
                                        {% endif %}
                                        {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div id="mawar" class="dataTable-container" style="display:none">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">NIP</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Nama</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Ruangan</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Shift</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Latitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Longitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Foto</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">tanggal</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Waktu</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Status</a></th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                {% for row in dataabsen %}
                                {% if row.3=='mawar'%}
                                <tr>
                                    <td>{{ row.1 }}</td>
                                    <td>{{ row.2 }}</td>
                                    <td>{{ row.3 }}</td>
                                    <td>{{ row.4 }}</td>
                                    <td>{{ row.5 }}</td>
                                    <td>{{ row.6 }}</td>
                                    <td><img src="../../static/assets/absen/{{ row.7 }}" width="100px" height="100px"></td>
                                    <td>{{ row.8 }}</td>
                                    <td>{{ row.9 }}</td>
                                {% if row.10=='tepat waktu'%}
                                <td style="color: green;">{{ row.10 }}</td>
                                {% endif %}
                                {% if row.10=='telat'%}
                                <td style="color: red;">{{ row.10 }}</td>
                                {% endif %}
                            </tr>
                                    {% endif %}
                                    {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div id="semua" class="dataTable-container" style="display:none">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">NIP</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Nama</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Ruangan</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Shift</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Latitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Longitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Foto</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">tanggal</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Waktu</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Status</a></th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                {% for row in dataabsen %}
                                <tr>
                                    <td>{{ row.1 }}</td>
                                    <td>{{ row.2 }}</td>
                                    <td>{{ row.3 }}</td>
                                    <td>{{ row.4 }}</td>
                                    <td>{{ row.5 }}</td>
                                    <td>{{ row.6 }}</td>
                                    <td><img src="../../static/assets/absen/{{ row.7 }}" width="100px" height="100px"></td>
                                    <td>{{ row.8 }}</td>
                                    <td>{{ row.9 }}</td>
                                {% if row.10=='tepat waktu'%}
                                <td style="color: green;">{{ row.10 }}</td>
                                {% endif %}
                                {% if row.10=='telat'%}
                                <td style="color: red;">{{ row.10 }}</td>
                                {% endif %}
                            </tr>
                                    {% else %}
                                <tr>
                                    <td colspan="10">Tidak Ada Data</td>
                                </tr>
                                {% endfor %}
                            
                        </tbody>
                    </table>
                </div>
                <div id="IT" class="dataTable-container" style="display:none">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">NIP</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Nama</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Ruangan</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Shift</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Latitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Longitude</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Foto</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Tanggal</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Waktu</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Status</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                {% for row in dataabsen %}
                                {% if row.3=='iT'%}
                                <tr>
                                    <td>{{ row.1 }}</td>
                                    <td>{{ row.2 }}</td>
                                    <td>{{ row.3 }}</td>
                                    <td>{{ row.4 }}</td>
                                    <td>{{ row.5 }}</td>
                                    <td>{{ row.6 }}</td>
                                    <td><img src="../../static/assets/absen/{{ row.7 }}" width="100px" height="100px"></td>
                                    <td>{{ row.8 }}</td>
                                    <td>{{ row.9 }}</td>
                                {% if row.10=='tepat waktu'%}
                                <td style="color: green;">{{ row.10 }}</td>
                                {% endif %}
                                {% if row.10=='telat'%}
                                <td style="color: red;">{{ row.10 }}</td>
                                {% endif %}
                            </tr>
                                {% endif %}
                                {% endfor %}
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</main>
<script>
    function RUANGAN() {
        let combo = document.getElementById("ruangan").value;
        var melati = document.getElementById("melati");
        var dahlia = document.getElementById("dahlia");
        var anggrek = document.getElementById("anggrek");
        var bugenvile = document.getElementById("bougenvile");
        var mawar = document.getElementById("mawar");
        var semua = document.getElementById("semua");
        console.log(combo)
        if (combo == "melati") {
            melati.style.display = "block"
            dahlia.style.display = "none"
            anggrek.style.display = "none"
            bugenvile.style.display = "none"
            mawar.style.display = "none"
            semua.style.display = "none"
        }
        else if (combo == "dahlia") {
            console.log(combo)
            melati.style.display = "none"
            dahlia.style.display = "block"
            anggrek.style.display = "none"
            bugenvile.style.display = "none"
            mawar.style.display = "none"
            semua.style.display = "none"
        }
        else if (combo == "anggrek") {
            melati.style.display = "none"
            dahlia.style.display = "none"
            anggrek.style.display = "block"
            bugenvile.style.display = "none"
            mawar.style.display = "none"
            semua.style.display = "none"
        }
        else if (combo == "bougenvile") {
            melati.style.display = "none"
            dahlia.style.display = "none"
            anggrek.style.display = "none"
            bugenvile.style.display = "block"
            mawar.style.display = "none"
            semua.style.display = "none"
        } else if (combo == "mawar") {
            melati.style.display = "none"
            dahlia.style.display = "none"
            anggrek.style.display = "none"
            bugenvile.style.display = "none"
            mawar.style.display = "block"
            semua.style.display = "none"
        } else if (combo == "IT") {
            melati.style.display = "none"
            dahlia.style.display = "none"
            anggrek.style.display = "none"
            bugenvile.style.display = "none"
            mawar.style.display = "block"
            semua.style.display = "none"
        } else {
            melati.style.display = "none"
            dahlia.style.display = "none"
            anggrek.style.display = "none"
            bugenvile.style.display = "none"
            mawar.style.display = "none"
            semua.style.display = "block"
        }
    }
 
 
</script>

@endsection




