@extends('frontend.layout.app')
@section('main_content')
{{-- <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-flat btn-danger">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="innner-content-sec pb-5">

    <section class="title-sec">
      <div class="container">
        <div class="inner-block-head">
          <h3 class="text-center">Forgot Password</h3>
        </div>
      </div>
    </section>

    <section class="menu-sec">
        <div class="container">
            <!-- <div class="inner-block-head">
                <h3 class="text-center">Login to Laatokoshero Foods</h3>
            </div> -->
            <div class="m-auto" style="max-width:500px">
                <div class="pb-4 mb-3">
                  <h6 class="mb-4 text-center lh-base">Please enter your email in the field below and check your email after clicking send link.</h6>
                  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif
                  <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-3">
                            <label for="emailInput" class="form-label">Email address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                                             </div>
                        <button type="submit" class="btn btn-custom w-100">Submit</button>
                    </form>
                </div>
                <div class="lg-footer">
                    <h5>Back to <a href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">Sign In</a></h5>
                </div>
            </div>
        </div>
    </section>

</div><!-- ends inner-content-sec -->
@endsection
