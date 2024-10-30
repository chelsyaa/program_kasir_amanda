@extends('layouts.master');
@section('title','detail_penjualan');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <h3>Halaman Tambah Data Detail Penjualan</h3>
                           <a class="btn btn-warning" href="/detail_penjualan">Kembali</a>
                        </div>
                        <div class="card-body">
                          <form action="/detail_penjualan/simpan" method="post">
                             @csrf
                             <div class="mb-3">
                                
                                <label for="" class="form-label">ID penjualan</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="id_penjualan"
                                    value="{{$id_penjualan}}"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                    readonly
                                />
                            </div>
                            <div class ="card-body">
                                <form action="/detail_penjualan/simpan" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-tabel">ID menu</label>
                                        <input type="text">
                                        <select class= 'form-control' name="id_menu" id="">
                                            @foreach($id_menu as $id_menu)
                                            <option value="{{$id_menu->id}}">{{$id_menu->nama_produk}}</option>
                                            @endforeach

                                        </select>
                                        @error('id_menu')
                                        <div class="alert alert-denger mt-2">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                            </div>
                                
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="harga"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Qty</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="qty"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">SubTotal</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="subtotal"
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