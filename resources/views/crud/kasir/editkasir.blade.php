@extends('layout')
@section('layout')
<body class="bg-body-secondary">
    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-success bg-gradient justify-content-between">
                <h4 class="card-title">Data</h4>
                <a href="{{url('kasir')}}" class="btn btn-light">
                    <i class="bi bi-caret-left-square-fill"></i>&nbsp;Kembali
                </a>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @foreach ($data as $item)
                        
                    @endforeach
                    @csrf
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Nama</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nama" value="{{$item->nama}}" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Username</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="username" value="{{$item->username}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Password</label>
                        <div class="col-10">
                            <input type="password" class="form-control" name="password" value="{{$item->password}}" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Akses</label>
                        <div class="col-10">
                            <select class="form-control" name="akses" id="akses" value="{{$item->akses}}">
                                    <option  {{$item->akses=="admin"?"selected":""}} >Admin</option>
                                    <option  {{$item->akses=="petugas"?"selected":""}} >Petugas</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        
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