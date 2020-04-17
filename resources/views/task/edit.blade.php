@extends('layouts.app')
@section('content')

    <form action="/edit" method="post">
        @csrf
        <div id="myDIV" class="header">
            
            <input type="hidden" name="id" value="{{ $editingTask	->id }}">


           <input type="text" name="name" value="{{ $editingTask->name }}">


            <button type="submit" class="addBtn">Done</button>
        

        </div>
    </form>
@endsection