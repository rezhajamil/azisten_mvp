@extends('layouts.dashboard')

@section('content')
    <div class="card">
    <div class="card-header d-flex align-items-center">
      <h3 class="card-title">Tabel Data Kos</h3>
      <a href="{{ route('admin.kos.create') }}" class="mx-3 btn btn-success">Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tableCariKos" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Pemilik</th>
          <th>Alamat</th>
          <th>Tipe</th>
          <th>Fasilitas</th>
          <th>Kategori</th>
          <th>Tahunan</th>
          <th>Bulanan</th>
          <th>Tanngal Dibuat</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($kos as $key=>$data)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->host->name }}</td>
                <td>{{ $data->kosAddress->address }}</td>
                <td>{{ $data->kosType->name }}</td>
                <td>
                  @php
                      $data_facilities=explode(',', $data->facility);
                  @endphp
                  @foreach ($data_facilities as $data_facility)
                      @foreach ($facilities as $facility)
                          @if ($facility->id == $data_facility)
                              {{ $facility->name }},
                          @endif
                      @endforeach
                  @endforeach
                </td>
                <td>{{ $data->kosCategory->name }}</td>
                <td>{{ $data->kosYearlyRent->fee }}</td>
                @if ($data->kosMonthlyRent)
                  <td>{{ $data->kosMonthlyRent->fee }}</td>
                  @else
                  <td>-</td>
                @endif
                <td>{{ $data->created_at->format('d M Y H:i') }}</td>
                <td>
                  <a href="{{ route('admin.kos.show',$data->id) }}"><button class="btn btn-primary">Lihat</button></a>
                  <form action="{{ route('admin.kos.destroy',$data->id) }}" method="post">
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
  <script>
    function Copy(url) {
      var dummy = document.createElement("input");

      // Add it to the document
      document.body.appendChild(dummy);

      // Set its ID
      dummy.setAttribute("id", "dummy_id");

      // Output the array into it
      document.getElementById("dummy_id").value=url;

      // Select it
      dummy.select();

      // Copy its contents
      document.execCommand("copy");

      // Remove it as its not needed anymore
      document.body.removeChild(dummy);

      alert('Berhasil Copy Link')
    }
  </script>
@endsection