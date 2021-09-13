@extends('layouts.admin')
@section('content')
<form action="{{route('category.update', $model->id)}}" method="post">
   @if($errors->any())
    <div class="alert alert-danger">
      <ul  style="list-style: none">
        @foreach($errors->all() as $error)
          <li>
            {{$error}}
          </li>
        @endforeach
      </ul>
    </div>
  @endif
  @method('PUT')
  @csrf
    <div class="form-group">
      <label for="name">Категории:</label>
      <input type="text" class="form-control" id="name" placeholder="Категории" name="name" value="{{$model->name}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection