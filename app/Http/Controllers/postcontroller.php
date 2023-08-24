<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class postcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createstts');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'gambar' => 'mimes:png,jpg,jpeg,gif|image|max:5848',
                'penulis' => 'required',
                'isi' => 'required',
                'judul' => 'required',
            ]
        );
        $file = $request->file('gambar');
        $path = $file->storeAs('uploads', time() . '.' . $request->file('gambar')->extension());

        $post = new post;
        $post->penulis = $request['penulis'];
        $post->judul = $request['judul'];
        $post->isi = $request['isi'];
        $post->gambar = $request = $path;
        $post->Save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::find($id);
        return view('editstts', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'gambar' => 'mimes:png,jpg,jpeg,gif|image|max:5848',
            ]
        );
        if ($request->file('gambar')) {
            if ($request->oldimage) {
                Storage::delete($request->oldimage);
            }
            $file = $request->file('gambar');
            $path = $file->storeAs('uploads', time() . '.' . $request->file('gambar')->extension());
        } else {
            $path = $request->oldimage;
        }


        $post = Post::find($id);
        $post->penulis = $request['penulis'];
        $post->judul = $request['judul'];
        $post->isi = $request['isi'];
        $post->gambar = $path;
        $post->Save();

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy('id', $id);
        return redirect('/home');
    }
}
