<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Category;
use Illuminate\Support\Str;


class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::latest()->get();

        return view('admin.content.list-content', compact('content'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::select('id', 'nama_category')->get();
        return view('admin.content.add-content', compact('category'));
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
            'title' => 'required|max:100',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,bmp,png,svg|max:10000',
            'status' => 'required',
            'category_id' => 'required',
        ]);
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . '_' . Str::slug($request->title) . '.' . $file->extension();
            $file->move('foto/content', $nama_file);
        }
        Content::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_file,
            'slug' => Str::slug($request->title),
            'status' => $request->status,
            'category_id' => $request->category_id,
        ]);
        return redirect('content');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = Category::select('id', 'nama_category')->get();
        $content = Content::find($id);
        return view('admin.content.edit-content', compact('category', 'content'));

        // return view('admin.content.edit-content', compact('category', 'content'));
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
            'title' => 'required|max:100',
            'deskripsi' => 'required',
            'status' => 'required',
            'category_id' => 'required',
        ]);
        $content = Content::find($id);
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . '_' . Str::slug($request->title) . '.' . $file->extension();
            $file->move('foto/content', $nama_file);
            $gambar = public_path('/foto/content/') . $content->gambar;
            if (file_exists($gambar)) {
                @unlink($gambar);
            }
            $content->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'gambar' => $nama_file,
                'slug' => Str::slug($request->title),
                'status' => $request->status,
                'category_id' => $request->category_id,
            ]);
        } else {
            $content->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'slug' => Str::slug($request->title),
                'status' => $request->status,
                'category_id' => $request->category_id,
            ]);
        }
        return redirect('content');
        // Storage::delete($content->gambar);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);

        $gambar = public_path('/foto/content/') . $content->gambar;
        if (file_exists($gambar)) {
            @unlink($gambar);
        }
        $content->delete();
        return redirect('content');
    }
}
