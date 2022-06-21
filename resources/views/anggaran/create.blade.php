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
        <div class="col-4 mb-4">
            <h3>Buat Pelaporan</h3>
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

    <form action="{{ route('anggaran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kegiatan</strong>
                    <input type="text" name="kegiatan" class="form-control" placeholder="Kegiatan" autofocus>
                </div>
                <div class="form-group">
                    <strong>Kode</strong>
                    <input type="number" name="kode" class="form-control" placeholder="Kode">
                </div>
                <div class="form-group">
                    <strong>Uraian Kegiatan</strong>
                    <textarea type="text" name="uraian" class="form-control" placeholder="Uraian Kegiatan"></textarea>
                </div>
                <div class="form-group">
                    <strong>Tanggal Acara</strong>
                    <input type="date" name="tgl" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Jumlah Item</strong>
                    <input type="text" name="jml_item" class="form-control" placeholder="Jumlah Item">
                </div>
                <div class="form-group">
                    <strong>Satuan Item</strong>
                    <input type="text" name="satuan_item" class="form-control" placeholder="Satuan Item">
                </div>
                <div class="form-group">
                    <strong>Harga Satuan</strong>
                    <input type="number" name="harga_satuan" class="form-control" placeholder="Harga Satuan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-danger" href="{{ route('anggaran.index') }}"> Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
@endsection