@extends ('layouts.app')

@section ('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
    <div class="col-12 p-5 d-flex justify-content-center  " >
    <img src="/back.jpg" style="width:300px;" >
    </div>
    </div>
        <div class="row"> 
        <div class="col-8 offset-2">
            <div class="col pb-5"  >
            <h1 style="font-family: BYekan;text-align:center; color:#159B9F;">
           ثبت خاطره جدید
            </h1>
            </div>
        <div class="form-group row">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"  autocomplete="title" autofocus>  
                        </div>
                <div class="row">
                             <input  id="body" type="text" style="height:300px" class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('body') }}"  autocomplete="body" autofocus>

                </div>
                <div class="row pt-4">
                <div class="col-4"></div>
               
                   <div class="col-4"> <button class="btn btn-primary w-100 "style=" background-color:#159B9F; font-family: BYekan;">ثبت</button> </div>
                   
                </div>
        </div>
    </div>
    </form>
</div>
@endsection
