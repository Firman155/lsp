@extends('layouts.app')
<title>Tambah Kategori | Gudangku</title>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card bg-light mt-3">
                    <div class="card-header bg-primary text-center fs-4 fw-semibold">Form Tambah Kategori</div>
                    <div class="card-body">
                        <form action="{{route('category.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Nama Kategori</label>
                                <input type="text" name="namacategory" class="form-control mb-2" autocomplete="off" placeholder="Masukkan Nama Kategori...">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control mb-2" autocomplete="off" placeholder="Masukkan Deskripsi Kategori...">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary fw-semibold">Simpan</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
