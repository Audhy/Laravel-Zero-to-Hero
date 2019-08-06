<?php

namespace App\Http\Controllers;

use Validator;
use DB;
use DateTime;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = DB::table('heroes')->get();
        // $heroes = DB::table('heroes')->paginate(2);
        $total_hero = DB::table('heroes')->count();
        return view('hero.index',compact('heroes','total_hero'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:heroes,name',
            'power' => 'required',
            'height' => 'numeric',

          ]);

          if ($validator->fails()) {
            return
            redirect()->route('hero.create')->withErrors($validator)->withInput();
          }
          DB::table('heroes')->insert(
          //rewuest berdasarkan name
            ['name' => $request->name,
            'power' => $request->power,
            'height' =>$request->height,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

          ]);
          return redirect()->route('hero.index')->with('pesan_sukses','simpan sukses !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hero = DB::table('heroes')->find($id);
        return view('hero.show',compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hero = DB::table('heroes')->find($id);
        return view('hero.edit',compact('hero'));
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
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:heroes,name',
            'power' => 'required',
            'height' => 'numeric',

          ]);

          if ($validator->fails()) {
            return
            redirect()->route('hero.create')->withErrors($validator)->withInput();
          }
          DB::table('heroes')->where('id',$id)->update(
            //rewuest berdasarkan name
            ['name' => $request->name,
            'power' => $request->power,
            'height' =>$request->height,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

          ]);
          return redirect()->route('hero.index')->with('pesan_sukses','simpan sukses !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('heroes')->where('id', $id)->delete();
        //echo'terhapus';
        return redirect()->route('hero.index')->with('pesan_sukses','Hapus sukses !');

    }
}
