<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\County;
use App\Models\Gig;
use Storage;
use Auth;

class GigController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:user');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $gigs = Gig::all();

      return view('user.gigs.index', [
        'gigs' => $gigs
      ]);
    }

    public function mygig()
    {
      $gigs = Gig::all();

      return view('user.mygig.index', [
        'gigs' => $gigs
      ]);
    }

    // public function gigshow($id)
    // {
    //   $gig = Gig::findOrFail($id);
    //
    //   return view('user.gigs.show', [
    //   'gig' => $gig
    //   ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $users = User::all();
      $counties = County::all();

        return view('user.gigs.create', [
          'users' => $users,
          'counties' => $counties
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
      'bandName' => 'required|max:191',
      'genre' => 'required|max:191',
      'location' => 'required|max:191',
      'dateTime' => 'required',
      'price' => 'required|numeric|min:1',
      'image' => 'file|image',
      'county_id' => 'required'
    ]);

    $gig = new Gig();

    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $extension = $image->getClientOriginalExtension();
      $filename = date('Y-m-d-His') . '_' . $request->input('bandName') . '.' . $extension;

      $path = $image->storeAs('public/images', $filename);
      $gig->image = $filename;
    }

    $gig->bandName = $request->input('bandName');
    $gig->genre = $request->input('genre');
    $gig->location = $request->input('location');
    $gig->dateTime = $request->input('dateTime');
    $gig->price = $request->input('price');
    $gig->user_id = Auth::id();
    $gig->county_id = $request->input('county_id');
    $gig->save();

    return redirect()->route('user.gigs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $gig = Gig::findOrFail($id);

      return view('user.gigs.show', [
      'gig' => $gig
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
        //
    }
}
