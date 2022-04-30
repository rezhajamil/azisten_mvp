@extends('layouts.dashboard')

@section('content')
    <a href="{{ route('admin.campus.create') }}" class="mb-2 btn btn-primary">Tambah Data</a>
    <div class="card">
    <div class="card-header d-flex flex-column">
      <h3 class="card-title">Tabel Data Kampus</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tableCariKos" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Slug</th>
          <th>Perguruan Tinggi</th>
          <th>Alamat</th>
          <th>Provinsi</th>
          <th>Kota</th>
          <th>Kecamatan</th>
          <th>Koordinat</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($campuses as $key=>$data)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->slug }}</td>
                <td>{{ $data->college->name }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->province }}</td>
                <td>{{ $data->city }}</td>
                <td>{{ $data->district }}</td>
                <td>{{ $data->latitude }}|{{$data->longitude  }}</td>
                <td>
                  <a href="{{ route('admin.college.edit',$data->id) }}"><button class="btn btn-primary">Edit</button></a>
                  <form action="{{ route('admin.college.destroy',$data->id) }}" method="post">
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