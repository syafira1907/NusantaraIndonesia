<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ContentResource;
use App\Models\Content;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //mengambil data content yang publish saja
    public function index()
    {

        $content = Content::latest()->where('status', 'Published')->get();
        return response([
            'total' => $content->count(),
            'messages' => 'Retrieved successfuly',
            'data' => ContentResource::collection($content)
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Content::find($id);
        $namaCategory = Category::find($content->category_id);
        $content->category_id = new ContentResource($namaCategory);
        if ($content != null) {
            return response(['project' => new ContentResource($content), 'message' => 'Retrieved successfully'], 200);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
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
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'deskripsi' => 'required',
            'status' => 'required',
            'category_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }
        $content = Content::find($id);
        if ($content != null) {
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
            return response(['data' => new ContentResource($content), 'message' => 'Supplier has been updated!'], 202);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
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
        if ($content != null) {
            $gambar = public_path('/foto/content/') . $content->gambar;
            if (file_exists($gambar)) {
                @unlink($gambar);
            }
            $content->delete();
            return response(['message' => 'Supplier has been deleted!']);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }
}
