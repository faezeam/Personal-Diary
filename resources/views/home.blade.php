@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        </div>
    <div class="col-9 p-5" >
            <div class="d-flex justify-content-between"><h1>{{ $user->username }}</h1>
            <a href="/n/create">یک خاطره جدید اضافه کنید</a>
        </div>
            <div class="d-flex">
                <div class="pr-3"> <strong>{{ $user->notes->count() }}</strong> posts </div>

            </div>

    </div>
    </div>

    <div class="row pt-4">
        @foreach ($user->notes as $note)
        <div class="col-4 pb-4">
        <a href="/n/{{ $note->id }}">
        <p>{{ $note->title }}</p>           
        </div>
        @endforeach
    </div>
</div>
@endsection

