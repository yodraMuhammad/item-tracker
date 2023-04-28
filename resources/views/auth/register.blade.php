@extends('auth.layouts.main')

@section('container')

<div class="col col-xl-6">
    <div class="card" style="border-radius: 1rem;">
      <div class="row g-0">
          <div class="p-4 p-lg-5 mx-auto">
            <form method="POST" action="/register">
              @csrf
              <div class="d-flex align-items-center mb-3 pb-1">
                <span class="h1 fw-bold mb-0">ItemTracker</span>
              </div>
              <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Regist your account</h5>

              {{-- Name --}}
              <div class="form-outline mb-4">
                <label class="form-label" for="name">Full Name</label>
                <input type="text" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" />
                @error('name')
                  <div class="invalid-feedback">
                      *{{$message }}
                  </div>
                @enderror
              </div>
              

              {{-- Email --}}
              <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" name="email" value="{{old('email')}}"/>
                @error('email')
                  <div class="invalid-feedback">
                      *{{$message }}
                  </div>
                @enderror
              </div>

              {{-- Password --}}
              <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" name="password"/>
                @error('password')
                <div class="invalid-feedback">
                    *{{$message }}
                </div>
                @enderror
              </div>

              <div class="pt-1 mb-4">
                <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
              </div>
              
              <p class="mb-5 pb-lg-2" style="color: #393f81;">Have an account ? <a href="/login"
                  style="color: #393f81;">Login</a></p>
              <a href="#!" class="small text-muted">Terms of use.</a>
              <a href="#!" class="small text-muted">Privacy policy</a>
            </form>
          </div>
      </div>
    </div>
</div>

@endsection()