@extends('layouts.main')
@section('content')
<span>Авторизуетес или региструетес что бы добавит или удалит, обновить</span> 
<br>
<table class="table table-dark">
    <thead>
      <tr>
        <th>Типы</th>
        <th>Категории</th>
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
        <td>{{$model->datas}}</td>
        <td>{{$model->sum}}</td>
        <td>{{$model->itogo}}</td>
        <td>{{$model->comment}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection