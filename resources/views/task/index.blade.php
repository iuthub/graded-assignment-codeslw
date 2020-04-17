@extends('layouts.app')
@section('content')
 <form action="{{ URL::to('/task') }}" method="post">
 	{{ csrf_field() }}
 	@if ( @count($errors) > 0)
			<div class="eror">
				<strong>Error:</strong>
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach 
				</ul>
			</div>
				@endif
          <div id="myDIV" class="header">
              <h2>My To Do List</h2>
              <input type="text" name="newTask" placeholder="Title...">
              <button type="submit" class="addBtn">Add</button>
            </div>
        </form>
      
        @if(count($storedTask)>0)
        	<ul id="myUL">
            @foreach($storedTask as $storedTask)
          	<li >
            <div class="task">
              {{ $storedTask->name }}
            </div>
            <div class="action">
                <a href="{{ route('task.edit', ['task' => $storedTask->id]) }}" ><i class="fa fa-edit">Edit</i></a>
            </div>
            <div class="action">
            
               <a href="{{ route('task.destroy', ['task' => $storedTask->id]) }}"><i class="fa fa-trash-alt">Delete</i></a>
                
            </div>
          </li>
          @endforeach
        </ul>
        @endif
@endsection
