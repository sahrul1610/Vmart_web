
@extends("Layout.v_template")
@section('title','Pesanan')
@section('content-header')
<h1>
    @yield('title')
    <small>@yield('title')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

    <li class="active">@yield('title')</li>
  </ol>
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">

        {{-- <p><a href="anggota/add" class=" btn btn-primary btn-sm"style="width: 150px;"><i class="fa fa-plus"></i>Tambah @yield('title')</a></p> --}}


        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> success</h4>
            {{  session("pesan")  }}
        </div>
        @endif
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Data @yield('title')</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
                <table id="example1" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>


                            <th>Customer</th>
                            <th>Tanggal</th>
                            <th>Jumlah Item</th>
                            <th>Jumlah Harga</th>
                            <th>Status</th>


                        </tr>
                    </thead>

                    <tbody>
                        <?php $no =1; ?>
                        @foreach ($orders as $data )
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                @if(empty($data->order_number))
                                <i>
                                    <b>NULL</b>
                                </i>
                                @else
                                {{-- {{ $data->order_number }} --}}
                                <a href="{{url('/pesanan/view')}}/{{$data->id}}">{{ $data->order_number }}</a>
                                @endif
                            </td>
                            {{-- <td>{{ $data->order_number }}</td> --}}
                            {{-- <td>{{ $data->getCustomer->name }}</td> --}}
                            <td>
                                @if(empty($data->getCustomer->name))
                                <i>
                                    <b>NULL</b>
                                </i>
                                @else
                                {{ $data->getCustomer->name }}
                                @endif
                            </td>
                            <td>{{ $data->order_date }}</td>

                            <td>{{ $data->total_items }}</td>
                            <td>{{ $data->total_price }}</td>

                            <td> @if($data->order_status == 1)
                                <i>
                                    <b>Dalam proses</b>
                                </i>
                                @elseif ($data->order_status == 2)
                                <i>
                                    <b>Dalam proses</b>
                                </i>
                                @elseif ($data->order_status == 3)
                                <i>
                                    <b>Dalam pengiriman</b>
                                </i>
                                @elseif ($data->order_status == 4)
                                <i>
                                    <b>Selesai</b>
                                </i>
                                @elseif ($data->order_status == 5)
                                <i>
                                    <b>DiBatalkan</b>
                                </i>
                                @endif

                            </td>
                        </tr>


                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
{{--
@foreach ( $anggota as $data)


<div class="modal modal-danger fade" id="delete{{ $data->id_anggota }}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{{ $data->nama_anggota }}</h4>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin anggota ini!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                    <a href="anggota/delete/{{ $data->id_anggota }}" class="btn btn-outline">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endforeach --}}
    @endsection


