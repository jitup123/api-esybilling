@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card mt-4">
        
            <div class="card-body p-4"> 
                <div class="text-center mt-2">
                    <h5 class="text-primary">{{ __('Register') }}</h5>
                    {{-- <p class="text-muted">Get your free velzon account now</p> --}}
                </div>
                <div class="p-2 mt-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="useremail" class="form-label">{{ __('Name') }} <span class="text-danger">*</span></label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror 
                        </div>

                        <div class="mb-3">
                            <label for="{{ __('Email Address') }}" class="form-label">{{ __('Email Address') }} <span class="text-danger">*</span></label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror                           
                        </div>
                        
                        <div class="mb-2">
                            <label for="userpassword" class="form-label">{{ __('Password') }} <span class="text-danger">*</span></label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>       
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="userpassword" class="form-label">{{ __('Confirm Password') }} <span class="text-danger">*</span></label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="mb-4">
                            <p class="mb-0 fs-13 text-muted fst-italic">By registering you agree to the Velzon <a href="#" class="text-primary text-decoration-underline fst-normal fw-semibold">Terms of Use</a></p>
                        </div>
                        
                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">{{ __('Register') }}</button>
                        </div>

                        <div class="mt-4 text-center">
                            {{-- <div class="signin-other-title">
                                <h5 class="fs-14 mb-4 title text-muted">Create account with</h5>
                            </div>

                            <div>
                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                            </div> --}}
                        </div>
                    </form>

                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->

        <div class="mt-4 text-center">
            <p class="mb-0">Already have an account ? <a href="{{ route('login') }}" class="fw-bold text-primary text-decoration-underline"> Signin </a> </p>
        </div>

    </div>
</div>
<!-- end row -->
</div>
<!-- end container -->

@endsection
