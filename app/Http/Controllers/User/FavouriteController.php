<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Upload;
use App\Models\Favourite;
use Auth;

class FavouriteController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:user,moderators');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $favourites = Favourite::all()->where('user_id', Auth::user()->id);

      return view('user.favourites.index', [
      'favourites' => $favourites]);

        // return view('user.favourites.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
      $favourite = new Favourite();
      $favourite->user_id = Auth::id();
      $favourite->upload_id = $id;
      $favourite->save();

      return redirect()->route('user.uploads.index');
        // return redirect()->route('user.favourites.store', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $favourite = Favourite::findOrFail($id);

      return view('user.favourites.show', [
        'favourite' => $favourite
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $favourite = Favourite::where('upload_id', $id)->where('user_id', Auth::user()->id);

      $favourite ->delete();

      return redirect()->route('user.uploads.show', $id);
    }
}
