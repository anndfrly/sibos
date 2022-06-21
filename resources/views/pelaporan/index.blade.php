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
            <p>Kertas Kerja</p>
        </div>
    </div>
</div>
@endsection
@section('container')
<div class="container">
    <div class="row mb-3 align-items-right text-center">
        <div class="col-lg-2 d-flex">
            <input type="text" placeholder="Cari.." class="cari2 mr-2"> <button class="test2 mr-5"><i class="bi bi-search"></i></button>
        </div>
        <div class="col-lg-2  d-flex">
             <button class="dropdownasd ">Urut Keatas<i class="bi bi-arrow-up-square-fill pl-2"></i></button>
        </div>
        <div class="col-lg-2  d-flex">
             <button class="dropdownasd ">Urut Kebawah<i class="bi bi-arrow-down-square-fill pl-2"></i></button>
        </div>
        
    </div>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <td>No</td>
                <td>Kegiatan</td>
                <td>Kode Rekening</td>
                <td>Uraian Kegiatan</td>
                <td>Tanggal</td>
                <td>Jumlah item</td>
                <td>Satuan Item</td>
                <td>Harga Satuan</td>
                <td><b>Total Jumlah</b></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $pwork)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pwork->kegiatan }}</td>
                <td>{{ $pwork->kode }}</td>
                <td>{{ $pwork->uraian }}</td>
                <td>{{ $pwork->tgl }}</td>
                <td>{{ $pwork->jml_item }}</td>
                <td>{{ $pwork->satuan_item }}</td>
                <td>{{ $pwork->harga_satuan }}</td>
                <td>{{ $pwork->total }}</td>
                <td>
                    <form action="{{ route('pelaporan.destroy',$pwork->id) }}" method="POST">
            
                        <a class="btn btn-primary" href="{{ route('pelaporan.edit',$pwork->id) }}">Edit</a>
        
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            {{ $reports->links() }}
        </tbody>
    </table>
    </div>
@endsection