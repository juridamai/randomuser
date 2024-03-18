@extends('layout/main')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->


        <div class="row">
            <div class="col-lg-6">
                <h1 class="h3 mb-2 text-gray-800">List Profesi</h1>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Jumlah</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach($profesi as $row)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$row->nama_profesi}}</td>
                                <td>{{$row->response ? $row->response()->count() : 'N/A'}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
