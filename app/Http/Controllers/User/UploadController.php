<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Upload;
use App\Models\User;
use App\Models\Type;
use App\Models\Tag;

class UploadController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:user,admin');
  }

    public function index()
    {
      $uploads = Upload::all();

      return view('user.uploads.index', [
        'uploads' => $uploads
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $users = User::all();
      $types = Type::all();
      $tags = Tag::all();

      return view('user.uploads.create', [
        'users' => $users,
        'types' => $types,
        'tags' => $tags
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
        'video' => 'required|max:500',
        'title' => 'required|max:191',
        'description' => 'required|max:191',
        'user_id' => 'required',
        'type_id' => 'required',
        'tag_id' => 'required'
      ]);

      $upload = new Upload();
      $upload->video = $request->input('video');
      $upload->title = $request->input('title');
      $upload->description = $request->input('description');
      $upload->user_id = $request->input('user_id');
      $upload->type_id = $request->input('type_id');
      $upload->tag_id = $request->input('tag_id');
      $upload->save();

      $request->session()->flash('success', 'Video added successfuly');

      return redirect()->route('user.uploads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $upload = Upload::findOrFail($id);
      // $reviews = Auth::user()->reviews;

      return view('user.uploads.show', [
        'upload' => $upload
        // ,'reviews' =>$book->reviews
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
      $upload = Upload::findOrFail($id);
      $users = User::all();
      $types = Type::all();
      $tags = Tag::all();

      return view('user.uploads.edit', [
        'upload' => $upload,
        'users' => $users,
        'types' => $types,
        'tags' => $tags
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
        'video' => 'required|max:500',
        'title' => 'required|max:191',
        'description' => 'required|max:191',
        'user_id' => 'required',
        'type_id' => 'required',
        'tag_id' => 'required'
      ]);

      $upload = Upload::findOrFail($id);
      $upload->video = $request->input('video');
      $upload->title = $request->input('title');
      $upload->description = $request->input('description');
      $upload->user_id = $request->input('user_id');
      $upload->type_id = $request->input('type_id');
      $upload->tag_id = $request->input('tag_id');
      $upload->save();

      $request->session()->flash('info', 'Video edited successfuly');

      return redirect()->route('user.uploads.index');
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
