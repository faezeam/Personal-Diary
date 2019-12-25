@extends ('layouts.app')

@section ('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row"> 
        <div class="col-8 offset-2">
            <div class="row">
            <h1>
            add New Note
            </h1>
            </div>
        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Note title</label>

                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"  autocomplete="title" autofocus>

                            
                        </div>
                <div class="row">
                          <label for="body" class="col-md-4 col-form-label text-md-right">Note body</label>

                             <input id="body" type="text" class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('body') }}"  autocomplete="body" autofocus>

                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Note</button>
                </div>
        </div>
    </div>
    </form>
</div>
@endsection
