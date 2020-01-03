@extends ('layouts.app')

@section ('content')
<div class="container">
<div class="row">
    <div class="col-12 p-5 d-flex justify-content-center  " >
    <img src="/back.jpg" style="width:300px;" >
    </div>
    </div>
    <div class="row">
         <div class="col-12  p-5">
         <h1 style="font-family: BYekan; text-align:center; color:#159B9F;" >"{{$note->title}}"</h1>
        </div>
        </div>
        <div class="row">
        <div class="col-12 ">
            
            <p style="font-family: BYekan; text-align:center">
            {{$note->body }}
            </p>
            </div>
    </div>
    <div class="row">
    <div class="col-4"></div>
    <div class="col-4  pt-5"><a class="btn btn-primary w-100 " style="background-color:#159B9F; font-family: BYekan;" href="/profile/{{$note -> user_id}}">بازگشت</a> </div>
</div>
</div>
@endsection