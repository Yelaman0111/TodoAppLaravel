@extends('layouts.app')

@section('content')

<h1 class="text-center my-5">
   Create Todo
</h1>

<div class="row justify-content-center">
   <div class="col-md-8">
      <div class="card card-default">
         <div class="card-header">Create new Todo</div>
         <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger">
               <ul class="list-group">
                  @foreach($errors->all() as $error)
                  <li class="list-group-item">
                     {{$error}}
                  </li>
                  @endforeach
               </ul>


            </div>
            @endif
            <form action="/store-todos" method="POST">
               @csrf
               <div class="form-group mb-2">
                  <input type="text" class="form-control" placeholder="name" name="name">
               </div>
               <div class="form-group mb-2">
                  <textarea type="text" class="form-control" cols="5" rows="5" placeholder="Description"
                     name="description"></textarea>
               </div>
               <div class="form-group text-center">
                  <button class="btn btn-success" type="submit">Create Todo</button>
               </div>

            </form>
         </div>
      </div>
   </div>
</div>




@endsection