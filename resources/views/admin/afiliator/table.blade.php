@extends('layouts.dashboard')

@section('content')
    <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Afiliator</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tableCariKos" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Telepon</th>
          <th>Gender</th>
          <th>Alamat</th>
          <th>Kode Referal</th>
          <th>Waktu Daftar</th>
          <th>Hubungi</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($afiliators as $key=>$data)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->referral_code }}</td>
                <td>{{ $data->created_at->format('d M Y H:i') }}</td>
                <td><a href="{{ route('admin.contact',$data->phone) }}" target="_blank" rel="noopener noreferrer">Hubungi Customer</a></td>
                <td>
                  {{-- <a href=""><button class="btn btn-primary">Edit</button></a> --}}
                  <form action="{{ route('admin.customer.destroy',$data->id) }}" method="post">
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