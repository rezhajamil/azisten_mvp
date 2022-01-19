@extends('layouts.dashboard')

@section('content')
    <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Pencarian Kos</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tableCariKos" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Telepon</th>
          <th>Kampus</th>
          <th>Fasilitas</th>
          <th>Tipe</th>
          <th>Range Harga</th>
          <th>Waktu</th>
          <th>Status</th>
          <th>Rating</th>
          <th>Review</th>
          <th>Hubungi</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($kosSearches as $key=>$data)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->customer->name }}</td>
                <td>{{ $data->customer->phone }}</td>
                <td>{{ $data->college }}</td>
                <td>{{ $data->facility }}</td>
                <td>{{ $data->type }}</td>
                <td>({{ number_format($data->price_min, 0, "", ".")}} - {{ number_format($data->price_max, 0, "", ".")}}) / {{ $data->payment_interval }}</td>
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
                @if ($data->review_id)
                <td>
                  @for ($i = 0; $i < $data->review->rating; $i++)
                      <i class="fas fa-star text-yellow"></i>
                  @endfor
                </td>
                <td>{{ $data->review->review }}</td>
                @else
                @php
                    $url=route('user.review.create',['service'=>1,'id'=>$data->id])
                @endphp
                <td><a class="review-link pointer" style="cursor: pointer;color:#007bff" onclick='Copy("{{$url}}")'>Minta Rating</a></td>
                <td><a class="review-link pointer" style="cursor: pointer;color:#007bff" onclick='Copy("{{$url}}")'>Minta Review</a></td>
                @endif
                <td><a href="customer/contact/{{ $data->customer->phone }}" target="_blank" rel="noopener noreferrer">Hubungi Customer</a></td>
                <td>
                  {{-- <a href=""><button class="btn btn-primary">Edit</button></a> --}}
                  <form action="{{ route('admin.cari_kos.destroy',$data->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
              </tr>
              <x-change_status_modal id="{{ $data->id }}" service="cari_kos"></x-change_status_modal>
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