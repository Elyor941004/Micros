@extends('layouts.admin')
@section('content')
<div>
  <span >Добавит контент</span> <br>
  <a type="button" class="btn btn-success" href="{{route('content.create')}}">Create</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th>Типы</th>
        <th>Категории</th>
        <th>Имя</th>
        <th>Дата</th>
        <th>Сум</th>
        <th>Итого</th>
        <th>Коммент</th>
      </tr>
    </thead>
    <tbody>
      @foreach($models as $model)
      <tr>
        <td>{{$model->tip}}</td>
        @foreach($categorys as $category)
          @if($category->id===$model->category_id)
            <td>{{$category->name}}</td>
          @endif
        @endforeach
        <td>{{$model->name}}</td>
        <td>{{$model->datas}}</td>
        <td>{{$model->sum}}</td>
        <td>{{$model->itogo}}</td>
        <td>{{$model->comment}}</td>
        <td><a href="{{route('content.edit', $model->id)}}" class="btn btn-success" type="button">update</a> 
          <form method="post" action="{{route('content.destroy', $model->id)}}">
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