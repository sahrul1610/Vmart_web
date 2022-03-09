
@extends("Layout.v_template")
@section('title',' Produk')
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
    @foreach ($products as $data)

    <div class="col-md-3">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{$data->name}}</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->


            <div class="box-body">

                <div class="text_center">

                </div>
                <table id="" class="table table-hover">
                    <thead>
                        <tr>
                            <td class="text-center">

                                <img src="{{ url('/image/'.$data->picture_name) }}" width='150px' height='100px' >
                            </td>
                        </tr>

                        <tr>


                            <td class="text-center" style="justify">{{$data->stock}} {{$data->product_unit }} / {{$data->price}}</td>

                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>



            </div>
        </div>

    </div>
    @endforeach

    @endsection


