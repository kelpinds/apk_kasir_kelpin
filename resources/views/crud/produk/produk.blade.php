@extends('layout')
@section('layout')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Produk</h1>

        <div class="card mb-4">

            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Table Produk

                <a href="{{url('tambahproduk')}}" class="btn btn-success">
                    <i class="bi bi-plus-circle-fill"></i> Tambah
                </a>
            </div>

            <div class="card-body">

                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @foreach ($data as $item)
                          
                        <tr>
                            <td>{{ $item->produkid }}</td>
                            <td>{{ $item->namaproduk }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->stok }}</td>
                            <td> <a href="{{url('editproduk/'.$item->produkid)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a> 
                                <a href="{{url('hapusproduk/'.$item->produkid)}}" class="btn btn-danger"><i class="fa fa-delete"></i> Delete</a>
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
