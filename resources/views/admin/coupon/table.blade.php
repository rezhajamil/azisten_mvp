@extends('layouts.dashboard')

@section('content')

    <a href="{{ route('admin.coupon.create') }}" class="mb-2 btn btn-primary">Buat Kupon</a>
    <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Kupon</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tableCariKos" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No.</th>
          <th>Kode Kupon</th>
          <th>Diskon</th>
          <th>Tanggal Expired</th>
          <th>Jenis</th>
          <th>Waktu</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($coupons as $key=>$data)
          {{-- {{ dd($data) }} --}}
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->coupon_code }}</td>
                <td>{{ $data->discount_amount }}</td>
                <td>{{ date('d M Y',strtotime( $data->expiration_date ))}}</td>
                <td>{{ $data->discount_type }}</td>
                <td>{{ $data->created_at->format('d M Y H:i') }}</td>
                <td>
                  {{-- <a href="{{ route('admin.coupon.edit',$data->coupon_code) }}"><button class="btn btn-primary">Edit</button></a> --}}
                  <form action="{{ route('admin.coupon.destroy',$data->coupon_code) }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
              </tr>
              <x-change_status_modal id="{{ $data->id }}" desc="{{ $data->description }}" service="pesan_galon" value="{{ $data->status_id }}"></x-change_status_modal>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection

@section('script')
  <script>
    $(function () {
      $("#tableCariKos").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });
  </script>
@endsection