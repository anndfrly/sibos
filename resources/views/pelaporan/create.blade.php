@extends('layout.main')
  
@section('title')
<div class="col-8">
    <h4>Sistem Manajemen Bantuan Operasional Sekolah</h4>
</div>
<div class="col-4">
    <div class="user-area dropdown float-right d-flex">
    <img class="user-avatar rounded-circle mr-2" src="{{asset('style/images/admin.jpg')}}" alt="User Avatar">
    <p>User</p>
    </div>
</div>
@endsection
@section('judul')
<div class="container">
    <div class="row">
        <div class="col-4 pl-4">
            <p>Buat Pelaporan</p>
        </div>
</div>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pelaporans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kegiatan</strong>
                    <input type="text" name="kegiatan" class="form-control" placeholder="Kegiatan">
                </div>
                <div class="form-group">
                    <strong>Kode Rekening</strong>
                    <input type="number" name="kode_rekening" class="form-control" placeholder="Kode Rekening">
                </div>
                <div class="form-group">
                    <strong>Urutan</strong>
                    <input type="text" name="urutan" class="form-control" placeholder="Urutan">
                </div>
                <div class="form-group">
                    <strong>Uraian Kegiatan</strong>
                    <textarea type="text" name="uraian_kegiatan" class="form-control" placeholder="Uraian Kegiatan"></textarea>
                </div>
                <div class="form-group">
                    <strong>Harga Satuan</strong>
                    <input type="number" name="harga_satuan" class="form-control" placeholder="Harga Satuan">
                </div>
                <div class="form-group">
                    <strong>Satuan Item</strong>
                    <input type="text" name="satuan_item" class="form-control" placeholder="Satuan Item">
                </div>
                <div class="form-group">
                    <strong>Bulan</strong>
                    <input type="date" name="bulan" class="form-control" placeholder="Bulan">
                </div>
                <div class="form-group">
                    <strong>Volume Barang</strong>
                    <input type="text" name="volume_barang" class="form-control" placeholder="Volume Barang">
                </div>
                <div class="form-group">
                    <strong>Total Jumlah</strong>
                    <input type="number" name="total_jumlah" class="form-control" placeholder="Total Jumlah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-danger" href="{{ route('pelaporans.index') }}"> Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
        
    </form>
@endsection