@extends('template.master')

@section('content')

<div class="content-wrapper">
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Form Detail Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('anggota.update', $anggotas[0]->id) }}" method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">
              <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Anggota</label>
                    <input type="text" class="form-control"  name="kode" value="{{ $anggotas[0]->kode_anggota }}">
                    <label for="exampleInputEmail1">Nama Anggota</label>
                    <input type="text" class="form-control" name="nama" value="{{ $anggotas[0]->nama_anggota }}">
                    <div class="form-group">
                    <label for="jk_anggota">Jenis Kelamin</label>
                      <select name="jk_anggota" id="jk_anggota" class="form-control @error('jk_anggota') is-invalid @enderror" value="{{ $anggotas[0]->jk_anggota }}">
                      <option value="L" @if($anggotas[0]->jk_anggota == 'L') selected @endif>Laki-Laki</option>
                      <option value="P" @if($anggotas[0]->jk_anggota == 'P') selected @endif>Perempuan</option>
                      </select>
                    </div>
                    @error('jk_anggota')
                      <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                        <label>Jurusan</label>
                        <select type="text" name="jurusan" class="form-control  @error('jurusan_anggota') is-invalid @enderror" value="{{ $anggotas[0]->jurusan_anggota }}">
                          <option selectdes>Jurusan</option>
                          <option value="RPL" @if($anggotas[0]->jurusan_anggota == 'RPL') selected @endif>RPL</option>
                          <option value="TKJ"@if($anggotas[0]->jurusan_anggota == 'TKJ') selected @endif>TKJ</option>
                          <option value="DPIB" @if($anggotas[0]->jurusan_anggota == 'DPIB') selected @endif>DPIB</option>
                          <option value="DGM" @if($anggotas[0]->jurusan_anggota == 'DGM') selected @endif>DGM</option>
                          <option value="TM" @if($anggotas[0]->jurusan_anggota == 'TM') selected @endif>TM</option>
                          <option value="TKRO" @if($anggotas[0]->jurusan_anggota == 'TKRO') selected @endif>TKRO</option>
                          <option value="TBSM" @if($anggotas[0]->jurusan_anggota == 'TBSM') selected @endif>TBSM</option>
                          <option value="TEI" @if($anggotas[0]->jurusan_anggota == 'TEI') selected @endif>TEI</option>
                          <option value="TITL" @if($anggotas[0]->jurusan_anggota == 'TITL') selected @endif>TITL</option>
                          <option value="TFLM" @if($anggotas[0]->jurusan_anggota == 'TFLM') selected @endif>TFLM</option>
                          <option value="TPL" @if($anggotas[0]->jurusan_anggota == 'TPL') selected @endif>TPL</option>
                        </select>
                        @error('jurusan_anggota')
                      <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="number" class="form-control" name="telp" value="{{ $anggotas[0]->no_telp_anggota }}">
                    <label for="exampleInputEmail1">Alamat Anggota</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $anggotas[0]->alamat_anggota }}">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                <a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Kembali</a>
                </div>
              </form>
            </div>
            </div>

            <div class="modal" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Peringatan</h5>
                  </div>
                  <div class="modal-body">
                    <p>Apakah Anda Yakin Akan Keluar Dari Form Edit Data Anggota</p>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <a href="{{ route('anggota.index') }}" class="btn btn-primary">Yes</a>
                  </div>
                </div>
              </div>
            </div>

<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
@endsection