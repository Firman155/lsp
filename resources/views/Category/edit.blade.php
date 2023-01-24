@extends('layouts.app')
<title>Ubah Kategori | Gudangku</title>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card bg-light mt-3">
                    <div class="card-header text-center fw-semibold fs-4 bg-primary">Form Ubah Kategori</div>
                    <div class="card-body">
                        <form action="{{route('category.update', $category->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Nama Kategori</label>
                                <input type="text" value="{{$category->namacategory}}" name="namacategory" class="form-control mb-2" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Deskripsi</label>
                                <input type="text" value="{{$category->deskripsi}}" name="deskripsi" class="form-control mb-2" autocomplete="off">
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
