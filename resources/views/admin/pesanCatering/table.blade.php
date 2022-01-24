@extends('layouts.dashboard')

@section('content')
    <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Pemesanan Catering</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tableCariKos" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Telepon</th>
          <th>Alamat</th>
          <th>Tipe</th>
          <th>Durasi</th>
          <th>Waktu</th>
          <th>Status</th>
          <th>Keterangan</th>
          <th>Rating</th>
          <th>Review</th>
          <th>Hubungi</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($catering_purchases as $key=>$data)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->customer->name }}</td>
                <td>{{ $data->customer->phone }}</td>
                <td>{{ $data->customer->address }}</td>
                <td>{{ $data->cateringCategory->name }}</td>
                <td>{{ $data->cateringDuration->name }} ({{ $data->cateringDuration->amount }} kali)</td>
                <td>{{ $data->created_at->format('d M Y H:i') }}</td>
                @switch($data->status_id)
                    @case(1)
                      <td><button class="border-0 bg-transparent" type="button" data-bs-toggle="modal" data-bs-target="#modalStatus{{ $data->id }}"><span class="badge bg-warning">{{ $data->status->name }}</span></button></td>
                      @break
                    @case(2)
                      <td><button class="border-0 bg-transparent" type="button" data-bs-toggle="modal" data-bs-target="#modalStatus{{ $data->id }}"><span class="badge bg-primary">{{ $data->status->name }}</span></button></td>
                        @break
                    @case(3)
                      <td><button class="border-0 bg-transparent" type="button" data-bs-toggle="modal" data-bs-target="#modalStatus{{ $data->id }}"><span class="badge bg-success">{{ $data->status->name }}</span></button></td>
                        @break
                    @case(4)
                      <td><button class="border-0 bg-transparent" type="button" data-bs-toggle="modal" data-bs-target="#modalStatus{{ $data->id }}"><span class="badge bg-secondary">{{ $data->status->name }}</span></button></td>
                        @break
                    @case(5)
                      <td><button class="border-0 bg-transparent" type="button" data-bs-toggle="modal" data-bs-target="#modalStatus{{ $data->id }}"><span class="badge bg-danger">{{ $data->status->name }}</span></button></td>
                        @break
                    @default
                      <td><button class="border-0 bg-transparent" type="button" data-bs-toggle="modal" data-bs-target="#modalStatus{{ $data->id }}"><span class="badge bg-danger">Unknown</span></button></td>
                        @break
                @endswitch
                <td>{{ $data->description }}</td>
                @if ($data->review_id)
                <td>
                  @for ($i = 0; $i < $data->review->rating; $i++)
                      <i class="fas fa-star text-yellow"></i>
                  @endfor
                </td>
                <td>{{ $data->review->review }}</td>
                @else
                @php
                    $url=route('user.review.create',['service'=>2,'id'=>$data->id])
                @endphp
                <td><a class="review-link pointer" style="cursor: pointer;color:#007bff" onclick='Copy("{{$url}}")'>Minta Rating</a></td>
                <td><a class="review-link pointer" style="cursor: pointer;color:#007bff" onclick='Copy("{{$url}}")'>Minta Review</a></td>
                @endif
                <td><a href="{{ route('admin.contact',$data->customer->phone) }}" target="_blank" rel="noopener noreferrer">Hubungi Customer</a></td>
                <td>
                  {{-- <a href=""><button class="btn btn-primary">Edit</button></a> --}}
                  <form action="{{ route('admin.pesan_catering.destroy',$data->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
              </tr>
              <x-change_status_modal id="{{ $data->id }}" desc="{{ $data->description }}" service="pesan_catering" value="{{ $data->status_id }}"></x-change_status_modal>
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