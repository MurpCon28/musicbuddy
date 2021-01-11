<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gig;

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
      $this->middleware('role:admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $gigs = Gig::all();
      return view('admin.gigs.index', [
      'gigs' => $gigs
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gigs.create');
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
      'name' => 'required|max:191',
      'genre' => 'required|max:191',
      'location' => 'required|max:191',
      'year' => 'required|integer|min:1900',
      'price' => 'required|numeric|min:0'
    ]);

    $gig = new Gig();
    $gig->name = $request->input('name');
    $gig->genre = $request->input('genre');
    $gig->location = $request->input('location');
    $gig->year = $request->input('year');
    $gig->price = $request->input('price');
    $gig->save();

    return redirect()->route('admin.gigs.index');
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

    return view('admin.gigs.show', [
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
      $gig = Gig::findOrFail($id);

    return view('admin.gigs.edit', [
    'gig' => $gig
    ]);
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
      $request->validate([
      'name' => 'required|max:191',
      'genre' => 'required|max:191',
      'location' => 'required|max:191',
      'year' => 'required|integer|min:1900',
      'price' => 'required|numeric|min:0'
    ]);

    $gig = Gig::findOrFail($id);

    $gig->name = $request->input('name');
    $gig->genre = $request->input('genre');
    $gig->location = $request->input('location');
    $gig->year = $request->input('year');
    $gig->price = $request->input('price');
    $gig->save();

    return redirect()->route('admin.gigs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $gig = Gig::findOrFail($id);
      $gig->delete();

      return redirect()->route('admin.gigs.index');
    }
}
