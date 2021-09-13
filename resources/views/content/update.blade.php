@extends('layouts.admin')
@section('content')
<form action="{{route('content.update', $model->id)}}" method="post">
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
    <label for="category">Категории:</label>
    <select id="category"name="category">
      @foreach($categorys as $category)
      <option value="{{$category->id}}" {{$category->id===$model->category_id ? 'selected':''}}>{{$category->name}}</option>
      @endforeach
    </select>
  </div>
    <div class="form-group">
    <label for="phone">Тип:</label>
    <label for="Расходы">Расходы:</label><input type="radio" class="form-control" id="Расходы" value="Расходы" name="tip" {{$model->tip==='Расходы'?'checked':''}}> 
    <label for="Доходы">Доходы:</label><input type="radio" class="form-control" id="Доходы" value="Доходы" name="tip" {{$model->tip==='Доходы'?'checked':''}}>
  </div>
   <div class="form-group">
      <label for="name">Имя:</label>
      <input type="text" class="form-control" id="name" placeholder="Имя" name="name" value="{{$model->name}}">
    </div>
     <div class="form-group">
      <label for="data">Дата:</label>
      <input type="date" class="form-control" id="datas" placeholder="Дата" name="datas" value="{{$model->datas}}">
    </div>
    <div class="form-group">
      <label for="sum">Сум:</label>
      <input type="integer" class="form-control" id="sum" placeholder="Сум" name="sum" value="{{$model->sum}}">
    </div>
    <div class="form-group">
      <label for="comment">Коммент:</label>
      <textarea type="text" class="form-control" id="comment" placeholder="Коммент" name="comment" rows="4">{{$model->comment}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection