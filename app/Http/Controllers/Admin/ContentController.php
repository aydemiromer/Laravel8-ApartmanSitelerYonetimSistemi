<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Content::all();
        return view('admin.content',['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Menu::with('children')->get();
        return view('admin.content_add',['datalist' =>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Content();

        $data->title =$request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->menu_id = $request->input('menu_id');
        $data->detail=$request->input('detail');
        $data->price=$request->input('price');
        $data->tax=(int)$request->input('tax');
        $data->type=$request->input('type');
        $data->user_id=Auth::id();
        $data->status=$request->input('status');

        if($request->file('image')!=null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }

        $data->save();
        return redirect() -> route('admin_content');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content,$id)
    {
        $data = Content::find($id);

        $datalist = Menu::with('children')->get();
        return view('admin.content_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content,$id)
    {
        $data = Content::find($id);

        $data->title =$request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->menu_id = $request->input('menu_id');
        $data->detail=$request->input('detail');
        $data->price=$request->input('price');
        $data->tax=(int)$request->input('tax');
        $data->type=$request->input('type');
        $data->user_id=Auth::id();
        $data->status=$request->input('status');
        if($request->file('image')!=null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect() -> route('admin_content');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content,$id)
    {
        DB::table('contents')->where('id','=',$id)->delete();
        return redirect() -> route('admin_content');
    }
}
