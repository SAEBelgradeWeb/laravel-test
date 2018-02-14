@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session()->has('poruka'))
        <div>{{ session()->get('poruka') }}</div>
        @endif
        <h1>Contact us</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form action="/contact-form" method="POST">

        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" value="{{old('email')}}">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="" cols="30" rows="10" class="form-control">{{old('message')}}</textarea>
        </div>

        <button class="btn btn-primary">Submit</button>
    </form>

    </div>

@endsection