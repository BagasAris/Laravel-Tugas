@extends('template.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">INI PERPUSTAKAAN</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- <div class="card-body">

        <table border="1" width="100%" style="text-align: center">
    <tr>
        <th>kode buku</th>
        <th>judul buku</th>
        <th>penulis buku</th>
        <th>penerbit buku</th>
        <th>tahun penerbit</th>
        <th>stok</th>
    </tr>
    @foreach($buku as $key)
    <tr>
        <td>{{$key->kode_buku}}</td>
        <td>{{$key->judul_buku}}</td>
        <td>{{$key->penulis_buku}}</td>
        <td>{{$key->penerbit_buku}}</td>
        <td>{{$key->tahun_penerbit}}</td>
        <td>{{$key->stok}}</td>
    </tr>
    @endforeach
</table> -->

        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection