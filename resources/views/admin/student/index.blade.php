@extends('admin.layout')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>MAHASISWA</h2>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered table-stripped">
                            <thead>
                                <th>#</th>
                                <th>NPM</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Telephone</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach($students as $row)
                                <tr>
                                   <<td>{{ $row->id }}</td>
                                    <td>{{ $row->npm }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->gender }}</td>
                                    <td>{{ $row->place_of_birth }}</td>
                                    <td>{{ $row->birthday }}</td>
                                    <td>{{ $row->address }}</td>
                                    <td>{{ $row->phone_number }}</td>
                                    <td>   
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                        
                                            
                                       
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="9">No Records Found</td>
                                </tr>              
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-right">
                        <a href="" class="btn btn-primary"> Add new </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection