@extends("Layout.v_template")
@section('title','Detail Buku')

@section('content-header')
<h1>
    @yield('title')
    <small>@yield('title')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Buku</a></li>
    <li class="active">Detail</li>
  </ol>
@endsection
@section('content')
<p><a href="/buku" class="btn btn-success tbn-sm">Kembali</a></p>
<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data @yield('title')</h3>


            </div>
            <!-- /.box-header -->
            
                
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode buku</label>
                        <input type="text" class="form-control" value="{{ $buku->kode_buku }}" readonly>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Judul</label>
                        <input type="text" class="form-control" value="{{ $buku->judul }}" readonly>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kategori</label>
                        <select class="form-control" name="id_kategori" disabled>
                            <option value="">- Pilih -</option>
                            @foreach($kategori as $k)
                                @if($k->id_kategori == $buku->id_kategori))
                                <option value="{{ $k->id_kategori }}" selected>
                                    {{ $k->nama_kategori }}
                                </option>
                                @else
                                <option value="{{ $k->id_kategori }}">
                                    {{ $k->nama_kategori }}
                                </option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    

                    <div class="form-group">
                        <label for="exampleInputPassword1">Pengarang</label>
                        <input type="text" class="form-control" value="{{ $buku->pengarang }}" readonly>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tahun Terbit</label>
                        <input type="text" class="form-control" value="{{ $buku->tahun_terbit }}" readonly>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Penerbit</label>
                        <input type="text" class="form-control"  value="{{ $buku->penerbit }}" readonly>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto</label>
                        <br>
                        <!-- <input type="text" class="form-control"  value="{{ $buku->penerbit }}" readonly> -->
                        <img src="{{ url('storage/'.$buku->foto) }}" width='150px'>
                    </div>


                </div>
                <!-- /.box-body -->


            
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

@endsection
