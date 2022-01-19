<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body class="bg-green2">
    <x-loading></x-loading>
    <div class="review d-flex justify-content-center align-items-center h-100">
        <div class="card rounded-3 p-4">
            <div class="card-title">
                <p class="h5 fw-bold">Berikan Ulasan Anda Mengenai Layanan Kami</p>
            </div>
            <div class="card-body px-0">
                <form action="{{ route('user.review.store',['service'=>$request->service,'id'=>$request->id]) }}" method="post">
                    @csrf
                    <p class="m-0">Rating Anda</p>
                    <div class="rating">
                        <input type="radio" name="rating" id="r5" value="5">
                        <label for="r5"></label>
                        <input type="radio" name="rating" id="r4" value="4">
                        <label for="r4"></label>
                        <input type="radio" name="rating" id="r3" value="3">
                        <label for="r3"></label>
                        <input type="radio" name="rating" id="r2" value="2">
                        <label for="r2"></label>
                        <input type="radio" name="rating" id="r1" value="1">
                        <label for="r1"></label>
                    </div>
                    <p class="m-0 my-2">Ulasan Anda</p>
                    <input type="text" name="review" class="form-control">
                    <button class="btn btn-green1 w-100 mt-3" type="submit">Kirim Review</button>
                </form>
            </div>
        </div>
    </div>
</body>
@include('layouts.script')
</html>