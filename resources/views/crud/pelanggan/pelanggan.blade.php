@extends('layout')
@section('layout')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pelanggan</h1>

        <div class="card mb-4">

            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Table Pelanggan

                <a href="{{url('tambahpelanggan')}}" class="btn btn-success">
                    <i class="bi bi-plus-circle-fill"></i> Tambah
                </a>
            </div>

            <div class="card-body">

                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $item)
                          
                        <tr>
                            <td>{{ $item->pelangganid }}</td>
                            <td>{{ $item->namapelanggan }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->nomortelpon }}</td>
                            <td> <a href="{{url('editpelanggan/'.$item->pelangganid)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a> 
                                <a href="{{url('hapuspelanggan/'.$item->pelangganid)}}" class="btn btn-danger"><i class="fa fa-delete"></i> Delete</a>
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
