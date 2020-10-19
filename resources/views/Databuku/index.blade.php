@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex px-2 py-2">
                            <div>
                                <a href="{{route('databuku.create')}}" class="btn btn-info ">Tambah Data</a>
                            </div>
                            <div></div>
                        </div>
                        <div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>JK</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Regan</td>
                                        <td>Mekarsari permai</td>
                                        <td>perempuan</td>
                                        <td>121020</td>
                                        <td>Waitting</td>
                                        <td>action</td>
                                           <td>
                                           <a herf=""class="btn btn-outline-primary btn-sm">Edit</a>
                                           <a herf="http://" class="btn btn-ouline-denger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection