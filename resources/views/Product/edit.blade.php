@extends('layouts.app')
<title>Ubah Produk | Gudangku</title>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card bg-light mt-3">
                    <div class="card-header text-center fw-semibold fs-4 bg-primary">Form Ubah Produk</div>
                    <div class="card-body">
                        <form action="{{route('product.update', $product->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Nama Produk</label>
                                <input type="text" value="{{$product->namaproduct}}" name="namaproduct" class="form-control mb-2" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Kategori</label>
                                <input type="text" value="{{$product->namacategories->namacategory}}" name="category_id" class="form-control mb-2" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Harga</label>
                                <input type="text" value="{{$product->harga}}" name="harga" class="form-control mb-2" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Deskripsi</label>
                                <input type="text" value="{{$product->deskripsi}}" name="deskripsi" class="form-control mb-2" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-semibold mb-2">Jumlah</label>
                                <input type="text" value="{{$product->qty}}" name="qty" class="form-control mb-2" autocomplete="off">
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
