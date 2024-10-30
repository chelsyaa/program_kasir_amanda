@extends('layouts.master');
@section('title','produk');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <h3>Halaman Tambah Data Menu</h3>
                           <a class="btn btn-warning" href="/produk">Kembali</a>
                        </div>
                        <div class="card-body">
                          <form action="/produk/simpan" method="post" enctype="multipart/form-data">
                             @csrf
                             <div class ="mb-3">
                                <label for="" class="form-label">Gambar</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    name="gambar"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                                @error('gambar')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                             <div class="mb-3">
                                <label for="" class="form-label">Nama Produk</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nama_produk"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input
                                    type="harga"
                                    class="form-control"
                                    name="harga"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Stok</label>
                                <input
                                    type="stok"
                                    class="form-control"
                                    name="stok"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                           <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection