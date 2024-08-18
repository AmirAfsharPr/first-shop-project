@extends('client.layout.master')

@section('content')

    <div class="row justify-content-center mt-4">
        <div class="col-6">
            @include('client.layout.errors')
            <h4>تایید ایمیل</h4>
                <form class="row g-3" method="post" action="{{route('client.register.verifyOtp', $user)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">ایمیل</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">کد تایید</label>
                        <div class="col-sm-10">
                            <input type="text" name="otp" class="form-control" id="inputPassword" placeholder="کد تایید ارسال شده به جیمیل خود را در این قسمت وارد کنید" minlength="5" maxlength="5" min="11111" max="99999" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" class="btn btn-primary mb-3" value="تایید ایمیل">
                    </div>
                </form>
        </div>
    </div>

@endsection
