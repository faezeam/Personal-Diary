@extends ('layouts.app')
<div class="container">
    <form action="/n" enctype="multipart/form-data" method="note">
        @csrf
        <div class="row"> 
        <div class="col-8 offset-2">
            <div class="row">
            <h1>
            add New note
            </h1>
            </div>
        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">note title</label>

                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"  autocomplete="title" autofocus>

                            
                        </div>
                <div class="row">
                <label for="body" class="col-md-4 col-form-label text-md-right">note body</label>
                    <input type="text" class="form-control-text" id="body" name="body">
                    
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary">Add New note</button>
                </div>
        </div>
    </div>
    </form>
</div>
@endsection