
@extends("Layout.v_template")
@section('title',' Detail Pembayaran')
@section('content-header')
<h1>
    @yield('title')
    <small>@yield('title')</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Buku</a></li>
    <li class="active">@yield('title')</li>
</ol>
@endsection
@section("page_scripts")

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session("gagal"))

<script>
    Swal.fire(
    'Gagal!',
    '{{ session("gagal") }}',
    'error'
    )
</script>

@elseif(session("sukses"))

<script>
    Swal.fire(
    'Berhasil!',
    '{{ session("sukses") }}',
    'success'
    )
</script>

@endif

@endsection

@section('content')
<div class="row">

        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Pembayaran</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <table id="" class="table table-hover">
                        <thead>




                            <tr>
                                <th></th>
                                <th></th>
                                <th>Pembayaran</th>
                            </tr>


                        </thead>

                        <tbody>

                            <tr >
                               <td >Transfer</td>
                               <td ></td>
                               <td ></td>
                            </tr>
                            <tr >
                               <td >Tanggal</td>
                               <td ></td>
                               <td ></td>
                            </tr>
                            <tr >
                               <td >Status</td>
                               <td ></td>
                               <td ></td>
                            </tr>
                            {{-- $kategori:
                                for ($kategori as $k) {
                                    if($k->id == $produk->category_id))
                                }($kategori as $k)
                                if($k->id == $produk->category_id))
                                {{ $k->id }}{{ $k->name }}
                                @endforeach; --}}


                            <tr >
                               <td >Transfer ke</td>
                               <td ></td>
                               <td ></td>
                            </tr>
                            <tr >
                               <td >Transfer dari</td>
                               <td ></td>
                               <td ></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>



                <!-- /.box-body -->




        <div class="col-md-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Bukti Pembayaran</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="" class="table table-hover">
                                <thead>
                                    <tr>
                                        <td>
                                            <input type="file" class="form-control" name="picture_name" id='picture_name' placeholder="" value="">
                                            <div class="text-danger">
                                                @error('picture_name')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                </thead>

                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Oke</button>
                        </div>
                    </div>

                </div>
            </form>

            @endsection


