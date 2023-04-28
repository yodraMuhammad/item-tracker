@extends('auth.layouts.main')

@section('container')

<div class="col col-xl-10">
    <div class="card overflow-hidden shadow-lg" style="border-radius: 1rem;">
        <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
                <swiper-container class="mySwiper" autoplay-delay="2500" autoplay-disable-on-interaction="false" css-mode="true">
                    <swiper-slide>
                        <img src="img/4.HEIC" alt="login form" class="img-fluid" style="height: 730px; width: 100%; " />
                        <div class="div h-auto">
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <img src="img/3.HEIC"
                        alt="login form" class="img-fluid " style="height: 730px; width: 100%;" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="img/2.HEIC"
                        alt="login form" class="img-fluid " style="height: 730px; width: 100%;" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="img/1.HEIC"
                        alt="login form" class="img-fluid " style="height: 730px; width: 100%;" />
                    </swiper-slide>
                </swiper-container>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
            <div class="card-body p-4 p-lg-5 text-black">
                <div class="d-flex align-items-center mb-3 pb-1">
                    {{-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i> --}}
                    <span class="h1 fw-bold mb-0">ItemTracker</span>
                </div>
                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                @if(session()->has('loginError'))
                    <div class="alert alert-danger text-center" role="alert">
                        {{session('loginError')}}
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success text-center" role="alert">
                        {{session('success')}}
                    </div>
                @endif

                <form method="POST" action="/login">
                    @csrf
                    
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" />
                        @error('email')
                        <div class="invalid-feedback">
                            *{{$message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" />
                        @error('password')
                        <div class="invalid-feedback">
                            *{{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="pt-1 mb-4">
                        <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                    </div>
                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/register"
                        style="color: #393f81;">Register here</a></p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

            </div>
            </div>
        </div>
    </div>
</div>


@endsection()