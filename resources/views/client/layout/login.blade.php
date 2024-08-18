<div class="login-popup">
    <div class="form-box">
        <div class="tab tab-nav-simple tab-nav-boxed form-tab">
            <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active border-no lh-1 ls-normal" href="#register">ورود / ثبت نام</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="register">
                    <form id="register-form" method="post" action="{{route('client.register.sendmail')}}">
                        @csrf
                        <div class="form-group mb-3">
                            <p>برای دریافت کد تایید ایمیل خود را وارد کنید</p>
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" id="register-email" name="email" placeholder="ایمیل خود را وارد کنید ... *" required>
                        </div>
                        <div class="form-footer">
                            <div class="form-checkbox">
                                <input type="checkbox" class="custom-checkbox" id="register-agree" name="register-agree" required>
                                <label class="form-control-label" for="register-agree">شرایط و قوانین را پذیرفته ام</label>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-block btn-rounded" type="submit" id="register_btn" name="register">دریافت کد تایید</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close"><span>×</span></button>
</div>
