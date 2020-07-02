@extends('layouts.app')
@section('content')
<div class="panel-body">
  <div class="col-sm-6">
    @include('common.errors')
    <form action="{{ route('tasks.update',$task->id) }}" method="POST"  class="form-horizontal">
      @method('PUT')
      @csrf
      <!-- task -->
      <div class="form-group">
        <label for="task">Task</label>
        <input type="text" id="task" name="task" class="form-control" value="{{$task->task}}">
      </div>
      <!-- deadline -->
      <div class="form-group">
        <label for="deadline">Deadline</label>
        <input type="date" id="deadline" name="deadline" class="form-control" value="{{$task->deadline}}">
      </div>
      <!-- comment -->
      <div class="form-group">
        <label for="comment">Comment</label>
        <input type="text" id="comment" name="comment" class="form-control" value="{{$task->comment}}">
      </div>
      <!-- Saveボタン/Backボタン -->
      <div class="well well-sm">
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-link pull-right" href="{{ route('tasks.index') }}">Back</a>
      </div>
    </form>
  </div>
</div>
@endsection