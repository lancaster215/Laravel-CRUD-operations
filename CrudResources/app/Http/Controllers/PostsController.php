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
        $posts = DB::table('region')
                    ->select('region.*','region.name')
                    ->get();
        $posts1 = DB::table('province')
                    ->join('region', 'province.region_id', '=', 'region.id')
                    ->select('province.*', 'province.name')
                    ->get();
        $posts2 = DB::table('cities')
                    ->join('province', 'cities.province_id', '=','province.id')
                    ->select('cities.*', 'cities.name')
                    ->get();
        $posts3 = DB::table('barangays')
                    ->join('cities', 'barangays.cities_id', '=','cities.id')
                    ->select('barangays.*', 'barangays.name')
                    ->get();
        return view('posts.index', 
            ['posts' => $posts, 'posts1' => $posts1, 'posts2' => $posts2, 'posts3' => $posts3]
        );
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
        if (isset($_POST['button'])) {
           $this->validate($request,[
                    'name'=>'required|string|max:255'
                ]);
            Region::create($request->all());
        }
        if(isset($_POST['button1'])){
                $this->validate($request,[
                'name'=>'required|string|max:255',
                'region_id'=>'required|integer'
            ]);
        Province::create($request->all());
        }
        if (isset($_POST['button2'])) {
            $this->validate($request,[
                'name'=>'required|string|max:255',
                'province_id'=>'required|integer',
                'region_id'=>'required|integer'
            ]);
            Cities::create($request->all());
        }
        if (isset($_POST['button3'])) {
            $this->validate($request,[
                'name'=>'required|string|max:255',
                'cities_id'=>'required|integer',
                'province_id'=>'required|integer',
                'region_id'=>'required|integer'
            ]);
            Barangays::create($request->all());
        }
        return redirect()->route('posts.create')->with('success','Post created successfully!');
    }
    /*
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Region::find($id);
        $post1 = Province::find($id);
        $post2 = Cities::find($id);
        $post3 = Barangays::find($id);
        return view('posts.show',compact('post', 'post1','post2','post3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Region::find($id);
        $post1 = Province::find($id);
        $post2 = Cities::find($id);
        $post3 = Barangays::find($id);
        return view('posts.edit',compact('post', 'post1','post2','post3'));
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
        if (isset($_POST['button'])) {
            Region::where('id','=',$id)->update(['name' => $request['region']]);
        }
        if (isset($_POST['button1'])) {
            Province::where('id','=',$id)->update(['name' => $request['prov']]);
        }
        if (isset($_POST['button2'])) {
            Cities::where('id','=',$id)->update(['name' => $request['cit']]);
        }
        if (isset($_POST['button3'])) {
            Barangays::where('id','=',$id)->update(['name' => $request['bar']]);
        }
        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (isset($_POST['button'])) {
            DB::table('region')->where('id','=', $id)->delete();
        }
        if (isset($_POST['button1'])) {
            DB::table('province')->where('id','=',$id)->delete();
        }
        if (isset($_POST['button2'])) {
            DB::table('cities')->where('id','=',$id)->delete();
        }
        if (isset($_POST['button3'])) {
            DB::table('barangays')->where('id','=',$id)->delete();
        }
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
