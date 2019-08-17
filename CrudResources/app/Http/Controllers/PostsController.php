<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
//use App\Posts;
use App\Region;
use App\Province;
use App\Cities;
use App\Barangays;
use DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Region::all();
        $posts1 = Province::all();
        $posts2 = Cities::all();
        $posts3 = Barangays::all();
        return view('posts.index', compact('posts','posts1','posts2','posts3'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $region = Region::all();
        return view('posts.create', compact('region'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request,[
            'r_name'=>'required|string|max:255'
        ]);
        Region::create($request->all());
        return redirect()->route('posts.index')->with('success','Post created successfully!');
    }
    /*public function store(Request $request){
        $this->validate($request,[
            'p_name'=>'required|string|max:255',
            'region'=>'required|integer'
        ]);
        Province::create($request->all());
        return redirect()->route('posts.index')->with('success','Post created successfully!');
    }
    $this->validate($request,[
        'c_name'=>'required|string|max:255',
        'province'=>'required|integer'
    ]);
    Cities::create($request->all());

    $this->validate($request,[
        'b_name'=>'required|string|max:255',
        'city'=>'required|integer'
    ]);
    Barangays::create($request->all());
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($r_id)
    {
        $post = Region::find($r_id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::find($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'r_name' => 'required'
        ]);
        Posts::find($id)->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($r_id)
    {
        Region::find($r_id)->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
