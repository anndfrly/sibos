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
        <div class="col-4 text-right pl-4">
            <p>Sumber Dana</p>
        </div>
        <div class="col-4 text-right">
            <input type="text" placeholder="" class="cari mr-5"> <button class="test mr-5"><i class="bi bi-arrow-down-square-fill pl-2"></i></button>
        </div>
    </div>
</div>
@endsection
@section('container')
<div class="container">
    <div class="row mb-3 align-items-center text-center">
        <div class="col-lg-2 ">
            <a href="{{ route('anggaran.create') }}" class="btn btn-md  py-3 px-4" style="background: rgba(21, 196, 235, 0.06); border-radius: 20px;"><i class="bi bi-plus pr-2" style="color: rgb(0, 166, 255)"></i><b> Tambah Baru</b></a>
        </div>
        <div class="col-lg-2 ">
            <button class="btn btn-md  py-3 px-5" style="background: rgba(21, 196, 235, 0.06); border-radius: 20px;"><i class="bi bi-journals pr-3 " style="color: rgb(0, 166, 255)"></i><b> Sisip</b></button>
        </div>
        <div class="col-lg-2 ">
            <button class="btn btn-md  py-3 px-4" style="background: rgba(21, 196, 235, 0.06); border-radius: 20px;"><i class="bi bi-pencil-fill pr-3" style="color: rgb(0, 166, 255)"></i><b> Ubah Data</b></button>
        </div>
        <div class="col-5-lg-2  pull-right">
            <input type="text" style="width: 100px" placeholder="Cari.." class="cari mr-5"><button class="test mr-5"><i class="bi bi-search"></i></button>
        </div>
        <div class="col-5-lg-2  pull-right">
             <button class="cari mr-3" style="width: 150px">Urut Keatas <i class="bi bi-arrow-up-square-fill mr-3"></i></button>
        </div>
        <div class="col-2-lg-2  pull-right">
            <button class="cari mr-3" style="width: 150px">Urut Kebawah<i class="bi bi-arrow-down-square-fill pl-2"></i></button>
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
            @foreach ($Works as $pwork)
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
                    <form action="{{ route('anggaran.destroy',$pwork->id) }}" method="POST">
            
                        <a class="btn btn-primary" href="{{ route('anggaran.edit',$pwork->id) }}">Edit</a>
        
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            {{ $Works->links() }}
        </tbody>
    </table>
    </div>

@endsection