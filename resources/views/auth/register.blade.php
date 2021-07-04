@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container" style="margin-top:100px">
    <form action="/register" method="POST">
        @csrf
        <fieldset>
            <legend>Sign up</legend>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"
                       class="form-control"
                       id="exampleInputEmail1"
                       placeholder="Enter email"
                       name="email" />
            </div>
            <div class="form-group">
                <label for="exampleInputFirstName1">First Name</label>
                <input type="text"
                       class="form-control"
                       id="exampleInputFirstName1"
                       placeholder="Enter First Name"
                       name="firstName" />
            </div>
            <div class="form-group">
                <label for="exampleInputLastName1">Last Name</label>
                <input type="text"
                       class="form-control"
                       id="exampleInputLastName1"
                       placeholder="Enter Last Name" 
                       name="lastName"/>
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="number"
                       class="form-control"
                       id="phone"
                       placeholder="phone" 
                       name="phone"/>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password"
                       class="form-control"
                       id="exampleInputPassword1"
                       placeholder="Password" 
                       name="password"/>
            </div>
            <div class="form-group">
                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                <input type="password"
                       class="form-control"
                       id="exampleInputConfirmassword1"
                       placeholder="Password" 
                       name="password_confirmation"/>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </fieldset>
    </form>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2019 Maba</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>
@endsection
