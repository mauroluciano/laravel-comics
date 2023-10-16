@extends('layouts.app')
@section('page-name', 'Comics')
@section('main-section')

<div class="row">
    @forelse ($comics as $comic)
    <div class="col-3">
        <div class="card h-100">
            <div class="card-body text-center">
                <img src="{{ $comic['thumb'] }}" class="mb-2"/>
                <h3>{{ $comic['title'] }}</h3>
                <p>{{ $comic['price'] }}</p>
            </div>    
            </div>
    </div>
        
    @empty
        no Comics
    @endforelse
</div>

@endsection
