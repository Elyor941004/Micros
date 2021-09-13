@extends('layouts.admin')
@section('content')
<form action="{{route('category.store')}}" method="post">
    @csrf
    @if($errors->any())
    <div class="alert alert-danger">
      <ul style="list-style: none">
        @foreach($errors->all() as $error)
          <li>
            {{$error}}
          </li>
        @endforeach
      </ul>
    </div>
  @endif
    <div class="form-group">
      <label for="name">Категории:</label>
      <input type="text" class="form-control" id="name" placeholder="Категории:" name="name">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
@endsection
