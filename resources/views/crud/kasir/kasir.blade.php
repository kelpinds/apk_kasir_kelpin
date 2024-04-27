@extends('layout')
@section('layout')
    <div class="container-fluid px-4">
        <h1 class="mt-4">User</h1>

        <div class="card mb-4">

            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Table Kasir

                <a href="{{url('tambahkasir')}}" class="btn btn-success">
                    <i class="bi bi-plus-circle-fill"></i> Tambah
                </a>
            </div>

            <div class="card-body">

                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Akses</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Akses</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @foreach ($data as $item)
                          
                        <tr>
                            <td>{{ $item->kasirid }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->password }}</td>
                            <td>{{ $item->akses }}</td>
                            <td> <a href="{{url('editkasir/'.$item->kasirid)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a> 
                                <a href="{{url('hapuskasir/'.$item->kasirid)}}" class="btn btn-danger"><i class="fa fa-delete"></i> Delete</a>
                            </td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </main>
@endsection
