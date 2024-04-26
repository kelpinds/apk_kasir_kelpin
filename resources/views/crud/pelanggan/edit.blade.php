@extends('layout')
@section('layout')
<body class="bg-body-secondary">
    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-success bg-gradient justify-content-between">
                <h4 class="card-title">Data</h4>
                <a href="{{url('pelanggan')}}" class="btn btn-light">
                    <i class="bi bi-caret-left-square-fill"></i>&nbsp;Kembali
                </a>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @foreach ($data as $item)
                        
                    @endforeach
                    @csrf
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Nama Pelanggan</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="namapelanggan" value="{{$item->namapelanggan}}" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Alamat</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="alamat" value="{{$item->alamat}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Nomor Telepon</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nomortelpon" value="{{$item->nomortelpon}}" >
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" type="reset"><i class="bi bi-x-square-fill"></i> Batal</button>
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-save-fill"></i>&nbsp;Simpan 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
    
@endsection