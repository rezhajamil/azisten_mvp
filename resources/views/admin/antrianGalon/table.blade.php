@extends('layouts.dashboard')

@section('content')
    <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Antrian Galon</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tableCariKos" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Telepon</th>
          <th>Jumlah</th>
          <th>Tipe</th>
          <th>Waktu</th>
          <th>Keterangan</th>
          <th>Hubungi</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($galon_queue as $key=>$data)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->galonPurchase->amount }}</td>
                <td>{{ $data->galonPurchase->galonCategory->name }}</td>
                <td>{{ $data->created_at->format('d M Y H:i') }}</td>
                <td>{{ $data->galonPurchase->description }}</td>
                <td><a href="{{ route('admin.contact',$data->galonPurchase->customer->phone) }}" target="_blank" rel="noopener noreferrer">Hubungi Customer</a></td>
                <td>
                  {{-- <a href=""><button class="btn btn-primary">Edit</button></a> --}}
                  <form action="{{ route('admin.antrian_galon.destroy',$data->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
              </tr>
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