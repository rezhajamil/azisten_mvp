@extends('layouts.dashboard')
@section('content')
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Data {{ $kos->name }}</h3>
        </div>
        <div class="card-body">
            <div class="mb-3 row">
                <div class="mb-2 d-flex justify-content-between">
                    <span class="px-1 h3 fw-bold">Pemilik Kos</span>
                    <a href="{{ route('admin.host.edit',$kos->host->id) }}" class="btn btn-primary me-3 h-fit">Edit</a>
                </div>
                <table class="table border-transparent">
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Nama</td>
                        <td>{{ $kos->host->name }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Email</td>
                        <td>{{ $kos->host->email?:'Tidak Ada' }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">No. Telp</td>
                        <td>{{ $kos->host->phone }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Alamat</td>
                        <td>{{ $kos->host->address?:'Tidak Ada' }}</td>
                    </tr>
                </table>
            </div>
            <div class="mb-3 row">
                <div class="mb-2 d-flex justify-content-between">
                    <span class="px-1 h3 fw-bold">Info Kos</span>
                    <a href="{{ route('admin.kos.edit',$kos->id) }}" class="btn btn-primary me-3 h-fit">Edit</a>
                </div>
                <table class="table border-transparent">
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Nama Kos</td>
                        <td>{{ $kos->name }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Tipe Kos</td>
                        <td>{{ $kos->kosType->name }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Kategori Kos</td>
                        <td>{{ $kos->kosCategory->name }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Deskripsi</td>
                        <td>{{ $kos->desc?:'-' }}</td>
                    </tr>
                </table>
            </div>
            <div class="mb-3 row">
                <div class="mb-2 d-flex justify-content-between">
                    <span class="px-1 h3 fw-bold">Alamat Kos</span>
                    <a href="{{ route('admin.kos_address.edit',$kos->kosAddress->id) }}" class="btn btn-primary me-3 h-fit">Edit</a>
                </div>
                <table class="table border-transparent">
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Alamat</td>
                        <td>{{ $kos->kosAddress->address }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Provinsi</td>
                        <td>{{ $kos->kosAddress->province }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Kota</td>
                        <td>{{ $kos->kosAddress->city }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Kecamatan</td>
                        <td>{{ $kos->kosAddress->district }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Kelurahan</td>
                        <td>{{ $kos->kosAddress->sub_district }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Latitude</td>
                        <td>{{ $kos->kosAddress->latitude }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Longitude</td>
                        <td>{{ $kos->kosAddress->longitude }}</td>
                    </tr>
                </table>
            </div>
            <div class="mb-3 row">
                <div class="mb-2 d-flex justify-content-between">
                    <span class="px-1 h3 fw-bold">Sewa Kos Tahunan</span>
                    <div>
                        <a href="{{ route('admin.kos_yearly.edit',$kos->kosYearlyRent->id) }}" class="btn btn-primary me-3 h-fit">Edit Sewa Tahunan</a>
                        @if ($kos->monthly_rent)
                            <a href="{{ route('admin.kos_monthly.edit',$kos->kosMonthlyRent->id) }}" class="btn btn-info me-3 h-fit">Edit Sewa Bulanan</a>
                        @endif
                    </div>                    
                </div>
                <table class="table border-transparent">
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Sewa Kos</td>
                        <td>{{ $kos->kosYearlyRent->fee }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">DP Kos</td>
                        <td>{{ $kos->kosYearlyRent->down_payment?:'0' }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Biaya Lebih 1 Orang</td>
                        <td>{{ $kos->kosYearlyRent->two_people_charge?:'0' }}</td>
                    </tr>
                </table>
            </div>
            @if ($kos->monthly_rent)
                <div class="mb-3 row">
                    <div class="mb-2 d-flex justify-content-between">
                        <span class="px-1 h3 fw-bold">Sewa Kos Bulanan</span>
                        <a href="{{ route('admin.kos_yearly.edit',$kos->kosMonthlyRent->id) }}" class="btn btn-primary me-3 h-fit">Edit</a>
                    </div>
                    <table class="table border-transparent">
                        <tr>
                            <td class="col-4 col-sm-3 fw-bold">Sewa Kos</td>
                            <td>{{ $kos->kosMonthlyRent->fee }}</td>
                        </tr>
                        <tr>
                            <td class="col-4 col-sm-3 fw-bold">DP Kos</td>
                            <td>{{ $kos->kosMonthlyRent->down_payment?:'0' }}</td>
                        </tr>
                        <tr>
                            <td class="col-4 col-sm-3 fw-bold">Biaya Lebih 1 Orang</td>
                            <td>{{ $kos->kosMonthlyRent->two_people_charge?:'0' }}</td>
                        </tr>
                    </table>
                </div>
            @endif
            <div class="mb-3 row">
                <div class="flex-wrap mb-2 d-flex justify-content-between">
                    <span class="col-auto px-1 h3 fw-bold col-12">Gambar Kos</span>
                    @if (count($images)>1)
                        <div>
                            <button class="btn btn-primary me-3 h-fit" data-toggle="modal" data-target="#changeCoverModal">Ganti Cover</button>
                            <button class="btn btn-danger me-3 h-fit" data-toggle="modal" data-target="#deleteModal">Delete</button>
                        </div>
                    @endif
                </div>
                <table class="table border-transparent">
                    <tr>
                        <td class="w-100">
                            <div class="flex-wrap d-flex">
                                @foreach ($images as $image)
                                    <div class="p-2 position-relative col-6 col-sm-4">
                                        <img src="{{ Storage::disk('s3')->url($image->url) }}" class="px-0 col-12">
                                        @if ($image->is_cover)
                                            <span class="mx-2 position-absolute badge badge-info fs-5" style="left: 0;top: 5">Cover</span>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-4 col-sm-3 fw-bold">Tambah Gambar Kos</td>
                    </tr>
                    <tr>
                        <td>
                            <form action="{{ route('admin.kos_image.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="kos_id" value="{{ $kos->id }}">
                                <input class="form-control col-12 col-sm-5 d-sm-inline" type="file" id="kos_images" name="kos_images[]" multiple accept="image/*" required/>
                                <button class="mt-1 ms-sm-2 mt-sm-0 btn btn-success" type="submit">Simpan</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="px-3 px-sm-5 modal fade" id="deleteModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteTitle" aria-hidden="true">
        <div class="modal-dialog mw-100">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTitle">Delete Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.kos_image.deleteImage') }}" method="post">
                @csrf
                @method('post')
                <div class="modal-body d-flex">
                    @foreach ($images as $image)
                        @if (!$image->is_cover)
                            <div class="px-2 col-6 col-sm-4">
                                <label for="delete{{ $image->id }}" class="p-1 position-relative">
                                    <img src="{{ Storage::disk('s3')->url($image->url) }}" class="px-0 col-12">
                                    <input type="checkbox" name="image_id[]" id="delete{{ $image->id }}" class="custom-chekcbox position-absolute" value="{{ $image->id }}" style="appearance: none">
                                </label>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="px-3 px-sm-5 modal fade" id="changeCoverModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="changeCoverTitle" aria-hidden="true">
        <div class="modal-dialog mw-100">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeCoverTitle">Change Cover</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.kos_image.change_cover',$kos->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body d-flex">
                    @foreach ($images as $image)
                        @if (!$image->is_cover)
                            <div class="px-2 col-6 col-sm-4">
                                <label for="changeCover{{ $image->id }}" class="p-1 position-relative">
                                    <img src="{{ Storage::disk('s3')->url($image->url) }}" class="px-0 col-12">
                                    <input type="radio" name="image_id" id="changeCover{{ $image->id }}" class="custom-radio position-absolute" value="{{ $image->id }}" style="appearance: none">
                                </label>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Change</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#changeCoverModal input[type=radio]').change(function(){
                $('#changeCoverModal input[type=radio]').parent('label').removeClass('border-primary').css('border','none');
                $('#changeCoverModal input[type=radio]:checked').parent('label').addClass('border-primary').css('border','3px solid');
            })
            $('#deleteModal input[type=checkbox]').change(function(){
                $('#deleteModal input[type=checkbox]').parent('label').removeClass('border-danger').css('border','none');
                $('#deleteModal input[type=checkbox]:checked').parent('label').addClass('border-danger').css('border','3px solid');
            })
        })
    </script>
@endsection