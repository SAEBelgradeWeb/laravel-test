@extends('layouts.app')

@section('content')
    <users usersdata="{{$users}}"></users>


    <vlada name="{{$siteName}}"></vlada>
    <h1> {{__('front.welcome', ['siteName' => $siteName] )}}</h1>

    {!! $header !!}
    {{--<h2>Whooouhooo</h2> --}}
    <ul>
        @php $counter = 0; @endphp
        @foreach($cars as $car)
            {{$loop->remaining}}
            @php $counter++ @endphp
            @if($car != 'toyota')
                <li>{{$counter}} {{$car}}</li>
            @else
                <li>{{$counter}} some other car</li>
            @endif
        @endforeach
    </ul>
@endsection

@section('topbar')
    <div style="height: 20px; background-color: blue;"></div>
@endsection

