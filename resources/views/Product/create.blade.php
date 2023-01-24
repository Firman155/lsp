@extends('layouts.app')
<title>Tambah Produk | Gudangku</title>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card bg-light mt-3">
                    <div class="card-header bg-primary text-center fs-4 fw-semibold">Form Tambah Produk</div>
                    <div class="card-body">
                        <form action="{{route('product.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Nama Produk</label>
                                <input type="text" name="namaproduct" class="form-control mb-2" autocomplete="off" placeholder="Masukkan Nama Produk...">
                            </div>
                            <div class="form-group">
                                <label for="category_id" class="fw-semibold mb-2">Nama Kategori</label>
                                <select name="category_id" id="category_id" class="form-control mb-2">
                                    <option disabled>Pilih Kategori</option>
                                    @foreach ($category as $c)
                                    <option value="{{$c->id}}" class="mb-2">{{$c->namacategory}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Harga</label>
                                <input type="text" name="harga" class="form-control mb-2" autocomplete="off" placeholder="Masukkan Harga Produk...">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control mb-2" autocomplete="off" placeholder="Masukkan Deskripsi Produk...">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Jumlah</label>
                                <input type="text" name="qty" class="form-control mb-2" autocomplete="off" placeholder="Masukkan Jumlah Produk...">
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <button class="btn btn-primary fw-semibold">Simpan</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
