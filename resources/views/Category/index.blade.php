@extends('layouts.app')
<title>Halaman Category | Gudangku</title>

@section('content')
<div class="container">
    <div class="row">
        <h3 class="text-center fw-bold">Daftar Kategori</h3>
        <div class="card bg-light mt-4">
            <div class="card-header bg-light">
                <div class="text-center">
                    <a href="{{route('category.create')}}" class="btn btn-primary text-white"><i class="bi bi-plus-lg"></i> Tambah</a>
                    <a href="{{route('product.index')}}" class="btn btn-warning text-white"><i class="bi bi-clipboard2-check-fill"></i> Daftar Produk</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama Kategori</th>
                            <th class="text-center">Deskripsi</th>
                            <th class="text-center">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($category as $ct)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}.</td>
                            <td class="text-center">{{$ct->namacategory}}</td>
                            <td class="text-center">{{$ct->deskripsi}}</td>
                            <td class="text-center">
                                <a href="{{route('category.edit', $ct->id)}}" class="btn btn-warning text-white"><i class="bi bi-pencil-square"></i></a>

                                <a href="{{route('category.destroy', $ct->id)}}" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a></td>

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
