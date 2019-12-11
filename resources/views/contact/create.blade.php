@extends('layout')

@section('content')
<div>
    <div class="image image--hero-small" style="background-image: url({{ asset('images/contact.jpg')}});">
        <div class="image--hero__text-container">
            <div class="hero-text">
                <h1 class="text-transform-uppercase">Contact</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="text-transform-uppercase">Hi, we are food<span class="color-primary">junky</span></h1>
                <p class="p-big">We are exited to hear from you</p>
            </div>
            <div class="col-sm-3">
                <h3>Contact us</h3>
                <p>info@foodjunky.com</p>
                <p>+64 7 240 50</p>
            </div>
            <div class="col-sm-3">
                <h3>You can find us here</h3>
                <p>imagenarystreet 1337</p>
                <p>DP 3894 Dreamcity</p>
            </div>
        </div>
    </div>
    <div class="bg bg--grey">
        <div class="container">
            @if( session()->has('message'))
                <div class="row row--25">
                    <div class="alert alert-success" role="alert">
                        <p><strong>Success!</strong> {{ session()->get('message') }} </p>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-sm-4">
                    <h1 class="text-transform-uppercase">Let's Talk</h1>
                </div>
                <div class="col-sm-8">
                    @if( ! session()->has('message'))
                        <form action="{{ route('contact.store') }}" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="Name">
                                        <div>{{ $errors->first('name') }}</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                        <div>{{ $errors->first('email') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <textarea name="message" value="{{ old('message') }}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <div>{{ $errors->first('message') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out haha</label>
                                    </div>
                                </div>
                                @csrf
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection