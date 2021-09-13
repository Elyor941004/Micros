@extends('layouts.admin')
@section('content')
<div>
  <span >Добавит категории</span> <br>
  <a type="button" class="btn btn-success" href="{{route('category.create')}}">Create</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th>Ид</th>
        <th>Категории</th>
      </tr>
    </thead>
    <tbody>
      @foreach($models as $model)
      <tr>
        <td>{{$model->id}}</td>
        <td>{{$model->name}}</td>
        <td><a href="{{route('category.edit', $model->id)}}" class="btn btn-success" type="button">update</a> 
          <form method="post" action="{{route('category.destroy', $model->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection