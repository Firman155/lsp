@extends('layouts.app')
<title>Halaman Produk | Gudangku</title>

@section('content')
<div class="container">
    <div class="row">
        <h3 class="text-center fw-bold">Daftar Produk</h3>
        <div class="card bg-light mt-4">
            <div class="card-header bg-light">
                <div class="text-center">
                    <a href="{{route('product.create')}}" class="btn btn-primary text-white"><i class="bi bi-plus-lg"></i> Tambah</a>
                    <a href="{{route('category.index')}}" class="btn btn-warning text-white"><i class="bi bi-bookmark-fill"></i> Dafar Kategori</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama Produk</th>
                            <th class="text-center">Nama Kategori</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Deskripsi</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Tools</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($product as $pr)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}.</td>
                            <td>{{$pr->namaproduct}}</td>
                            <td class="text-center">{{$pr->namacategories->namacategory}}</td>
                            <td class="text-center">{{$pr->harga}}</td>
                            <td class="text-center">{{$pr->deskripsi}}</td>
                            <td class="text-center">{{$pr->qty}}</td>
                            <td class="text-center">
                                <a href="{{route('product.edit', $pr->id)}}" class="btn btn-warning text-white"><i class="bi bi-pencil-square"></i></a>

                                <a href="{{route('product.destroy', $pr->id)}}" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a></td>
                        @empty
                           <td colspan="4" class="text-center">Belum Ada Data!</td>
                            @endforelse
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
