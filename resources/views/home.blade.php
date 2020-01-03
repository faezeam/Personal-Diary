@extends('layouts.app')


@section('content')

<style >
font-family:BYekan;
</style>

<div class="container">
    <div class="row">
    <div class="col-12 p-5 d-flex justify-content-center " >
    <img src="/back.jpg" style="width:300px;">
    </div>
    </div>

    <div class="row">
    <div class="col-9  " >
            <div class="d-flex justify-content-between"><h1>{{ $user->username }}</h1>
            
            </div>
            <div class="d-flex">
                <div class="pr-3"> <strong>{{ $user->notes->count() }}</strong> posts </div>

            </div>

    </div>
    </div>
    <div class="row d-flex justify-content-center pr-5" style=" font-family: Bnazanin;">
    <a class="btn border btn-light " style=" font-family: BYekan;" href="/p/create">یک خاطره جدید اضافه کنید</a>
    </div>

    <div class="row">
        @foreach ($user->notes as $note)
        <div class="col-5 m-4 border border-info" style=" font-family: BYekan;">
        <div class=" d-flex">
        <div class="pr-5 mr-5"><p>{{ $note->created_at }}</p></div>
        <div class="pl-5 ml-5"><p >{{ $note->title }}</p> </div></div>
        <div class="d-flex " style=" font-family: BYekan;">

<<<<<<< HEAD
                    <div class="col-4" >
                    <a class="btn btn-primary w-100 " href="{{ route('note.destroy', $note->id) }}" >حذف </a>
                    
                    </div>
                    <div class="col-4" ><a class="btn btn-primary  w-100" href="/p/{{ $note->id }}/edit"> ویرایش</a> </div>
                    <div class="col-4" ><a class="btn btn-primary  w-100" href="/p/{{ $note->id }}">نمایش</a> </div>
=======


                    <div class="col-4" ><a class="btn btn-primary w-100 " style="background-color:#159B9F; " href="" >حذف </a></div>

                    <div class="col-4" ><a class="btn btn-primary  w-100" style="background-color:#159B9F; "href="/p/{{ $note->id }}/edit"> ویرایش</a> </div>
                    <div class="col-4" ><a class="btn btn-primary  w-100"style="background-color:#159B9F; " href="/p/{{ $note->id }}">نمایش</a> </div>
>>>>>>> 5b8b326225b05520014899ad73dbe49d7c48d331
                </div>          
        </div>
        @endforeach
    </div>
</div>
@endsection

