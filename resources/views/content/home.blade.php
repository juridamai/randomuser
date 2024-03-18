@extends('layout/main')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->


        <div class="row">
            <div class="col-lg-6">
                <h1 class="h3 mb-2 text-gray-800">List Random User</h1>
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
                            <th>Jenis Kelamin</th>
                            <th>Jalan</th>
                            <th>Email</th>
                            <th>Profesi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach($listUser as $row)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->jk}}</td>
                                <td>{{$row->nama_jalan}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->nama_profesi}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{$listUser->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
@endsection
