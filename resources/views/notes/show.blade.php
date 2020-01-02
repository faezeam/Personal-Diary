@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
         <div class="col-12">
         <h1>"{{$note->title}}"</h1>
        </div>
        </div>
        <div class="row">
        <div class="col-12">
            <h3> {{$note->user->username }} </h3>
            <p>
            {{$note->body }}
            </p>
            </div>
    </div>
</div>
@endsection