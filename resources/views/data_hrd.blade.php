@extends('layout.base')
@section('container')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data HRD</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">HRD</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header" style="background-color: #E6B794;">
                <i class="fas fa-table me-1"></i>
                Data HRD
            </div><br>
            <div class="col-xl-2 col-md-2">
                <a href="/form/hrd">
                <div class="card bg-success text-white mb-2">
                    <div class="card-body" style="text-align: center;">Add</div>
                </div>
                </a>
            </div>
            <div class="card-body">
                <div class="dataTable-container" >
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">NIP</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Nama</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Email</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Gender</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Tanggal Lahir</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">No Hp</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Alamat</a></th>
                                <th data-sortable=""><a href="#" class="dataTable-sorter">Aksi</a></th>
                            </tr>
                        </thead>
                        <tbody>
                                {% for row in hrd %}
                                <tr>
                                <td>{{ row.0 }}</td>
                                <td>{{ row.1 }}</td>
                                <td>{{ row.2 }}</td>
                                <td>{{ row.3 }}</td>
                                <td>{{ row.4 }}</td>
                                <td>{{ row.5 }}</td>
                                <td>{{ row.6 }}</td>
                                <td>
                                <div class="col-xl-1 col-md-1"style="text-align: center;text-size-adjust: 20px height: 10px;width: 10px; margin-bottom: 10px;">
                                    <div class="card bg-warning text-white mb-0"style="text-align: center;text-size-adjust: 20px height: 10px;width: 60px;">
                                        <a href="/Edit/{{row.0}} ">edit
                                            <div class="card-body" style="text-align: center;text-size-adjust: 20px; height: 10px;width: 10px;"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-1 col-md-1"style="text-align: center;text-size-adjust: 20px height: 10px;width: 10px;">
                                    <div class="card bg-danger text-white mb-0"style="text-align: center;text-size-adjust: 20px height: 10px;width: 60px;">
                                        <a href="/Delete/{{row.0}}">delete
                                            <div class="card-body" style="text-align: center;text-size-adjust: 20px; height: 10px;width: 10px;"></div>
                                        </a>
                                    </div>
                                </div>
                                </td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td colspan="10">Tidak Ada Data</td>
                                </tr>
                                {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
</script>
@endsection