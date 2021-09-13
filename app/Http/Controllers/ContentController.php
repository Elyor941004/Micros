<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Category;
use App\Http\Requests\ContentRequest;


class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $models = Content::all();
        return view('content.index',['models'=>$models, 'categorys'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = Category::all();
        return view('content.create', ['models' =>$model]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentRequest $request)
    {
       $model = new Content();
       $model->tip = $request->tip;
       $model->name = $request->name;
       $model->category_id = $request->category;
       $model->datas = $request->datas;
       $model->sum = $request->sum;
       $model->itogo = $request->sum*12;
       $model->comment = $request->comment;
       $model->save();
       return redirect()->route('content.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $model = Content::find($id);
        return view('content.update', ['model'=>$model, 'categorys'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContentRequest $request, $id)
    {
        $model = Content::find($id);
       $model->tip = $request->tip;
       $model->name = $request->name;
       $model->category_id = $request->category;
       $model->datas = $request->datas;
       $model->sum = $request->sum;
       $model->itogo = $request->sum*12;
       $model->comment = $request->comment;
       $model->save();
       return redirect()->route('content.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Content::find($id)->delete();
        return redirect()->route('content.index');
    }
}
