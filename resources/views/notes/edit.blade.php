@extends ('layouts.app')

@section ('content')
<div class="container">
    <form action="/profile/{{$note -> id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row"> 
        <div class="col-8 offset-2">
            <div class="row">
            <h1>
             edit Note
            </h1>
            </div>
        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Note title</label>

                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $note->title }}"  autocomplete="title" autofocus>

                            
                        </div>
                <div class="row">
                          <label for="body" class="col-md-4 col-form-label text-md-right">Note body</label>

                             <input id="body" type="text" class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('body') ?? $note->body}}"  autocomplete="body" autofocus>

                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary">save</button>
                </div>
        </div>
    </div>
    </form>
</div>
@endsection
