@extends('layouts.main')

@section('page-title', 'HOMEPAGE')

@section('content')
    <main>
        <div class="container">
            @foreach($comics as $singleArr)
                <div class="card">
                    <div class="img">
                        <img src="{{ $singleArr['thumb'] }}" alt="">
                    </div>
                    <div class="info">
                        <h4>
                            {{ $singleArr['title'] }}
                        </h4>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection