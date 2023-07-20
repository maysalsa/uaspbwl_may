@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Skincare</h3>
        <form action="{{ url('/skincare') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>MERK SKINCARE</label>
                <input type="text" class="form-control" name="produk_name">
            </div>
            <div class="mb-3">
                <label>JENIS SKINCARE</label>
                <input type="text" class="form-control" name="produk_jenis">
            </div>
            <div class="mb-3">
                <label>HARGA</label>
                <input type="text" class="form-control" name="produk_harga">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-danger">
            </div>
        </form>
    </div>
@endsection