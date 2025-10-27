@extends('dashboard.layouts.app')
@section('title', getTranslatedWords('notifications'))
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{getTranslatedWords('home')}} /</span> {{getTranslatedWords('notifications')}}</h4>
    @foreach($notifications as $n)
    <div class="card mb-3">
        <div class="card-body">
            {{ $n->data['message:'.app()->getLocale()] }} <br>
            <span>{{$n->created_at->diffForHumans()}}</span>
        </div>
        
    </div>
    @endforeach
    <div class="text-center">
        {{ $notifications->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection