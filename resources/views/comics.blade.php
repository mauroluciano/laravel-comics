@extends('layouts.app')
@section('page-name', 'Comics')
@section('main-section')

<div class="row">
    @forelse ($comics as $comic)
    <div class="col-3">
        @include('partials._comics-card')

    </div>
        
    @empty
        no Comics
    @endforelse
</div>

@endsection
