@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css')}}">

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1"  style="border: 1px solid grey; padding: 20px;">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center">Sign In user</div>

                        <form action="{{ route('login') }}" id="contact_form" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Or Phone</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  aria-describedby="emailHelp" placeholder="Email Or Phone" required="">
                                @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required=""  aria-describedby="emailHelp" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="contact_form_button">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="panel"></div>
    </div> 




@endsection
