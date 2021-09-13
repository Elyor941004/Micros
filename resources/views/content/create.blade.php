@extends('layouts.admin')
@section('content')
<form action="{{route('content.store')}}" method="post">
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
    <label for="category">Категории:</label>
    <select id="category" name="category">
      @foreach($models as $model)
      <option value="{{$model->id}}">{{$model->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="phone">Тип:</label>
    <label for="Расходы">Расходы:</label><input type="radio" class="form-control" id="Расходы" value="Расходы" name="tip"> <br>
    <label for="Доходы">Доходы:</label><input type="radio" class="form-control" id="Доходы" value="Доходы" name="tip">
  </div>
    <div class="form-group">
      <label for="name">Имя:</label>
      <input type="text" class="form-control" id="name" placeholder="Имя" name="name">
    </div>
     <div class="form-group">
      <label for="data">Дата:</label>
      <input type="date" class="form-control" id="datas" placeholder="Дата" name="datas">
    </div> 
    <div class="form-group">
      <label for="sum">Сум:</label>
      <input type="integer" class="form-control" id="sum" placeholder="Сум" name="sum">
    </div>
    <div class="form-group">
      <label for="comment">Коммент:</label>
      <textarea type="text" class="form-control" id="comment" placeholder="Коммент" rows="4" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
@endsection
