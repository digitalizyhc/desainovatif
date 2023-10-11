<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Post;
use App\Models\Tenant;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RahulHaque\Filepond\Facades\Filepond;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Article - Desa ' . ucwords(tenant('name'));
        $tenant = Tenant::where('id', auth()->user()->tenant?->id)->first();
        $posts = Post::with(['category', 'visits'])
            ->where('tenant_id', $tenant->id)
            ->filter(request())
            ->latest()
            ->paginate(request()->row ?? 10);

            $data = [
                'title' => $title,
                'posts' => $posts,
            ];

        return view('pages.tenant.post.index', $data);
    }

    public function create()
    {
        $tenant = Tenant::where('id', auth()->user()->tenant?->id)->first();
        $data = [
            'categories' => Category::where('tenant_id', $tenant->id)->get(),
            'url'        => route('tenant.post.store'),
            'title'      => 'Tambah Artikel',
        ];

        return view('pages.tenant.post._create', $data);
    }

    public function store(PostRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = [
                'title'       => $request->title,
                'slug'        => $request->slug,
                'category_id' => $request->category_id,
                'body'        => $request->content,
                'tenant_id'   => auth()->user()->tenant?->id,
            ];

            $post = Post::create($data);

            $fileInfo = Filepond::field($request->image);

            if ($fileInfo->getFile() === null) {
                return back()->with('error', 'Cover Harus diisi')->withInput();
            }

            $post->addMedia($fileInfo->getFile()->getPathname())->toMediaCollection('article');
            $fileInfo->delete();

            DB::commit();
            return back()->with('success', 'Berhasil Menambahkan Data.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }


    public function edit(Post $post)
    {
        $tenant = Tenant::where('id', auth()->user()->tenant?->id)->first();

        $data = [
            'post'        => $post,
            'url'         => route('tenant.post.update', $post),
            'categories'  => Category::where('tenant_id', $tenant->id)->get(),
            'title'       => 'Edit Artikel',
            'categoryId'  => $post->category_id,
        ];

        return view('pages.tenant.post._create', $data);
    }

    public function update(PostRequest $request, post $post)
    {
        DB::beginTransaction();
        try {
            $data = [
                'title'       => $request->title,
                'category_id' => $request->category_id,
                'body'        => $request->content,
                'slug'        => $request->slug,
            ];

            $post->update($data);
            $fileInfo = Filepond::field($request->image);
            if ($fileInfo->getFile() !== null) {
                if ($post->getFirstMediaUrl('article')) {
                    $post->clearMediaCollection('article');
                    $post->addMedia($fileInfo->getFile()->getPathname())->toMediaCollection('article');
                } else {
                    $post->addMedia($fileInfo->getFile()->getPathname())->toMediaCollection('article');
                }
                $fileInfo->delete();
            }

            DB::commit();
            return back()->with('success', 'Berhasil Mengubah Data.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return back()->with('success', 'Berhasil Menghapus Data.');;
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function togglePublish(Request $request)
    {
        try {
            Post::where('id', $request->id)->update([
                'is_published' => $request->isPublish,
            ]);

            $message = $request->isPublish ? 'Artikel berhasil di-publish' : 'Artikel berhasil di-unpublish';

            return response()->json(['msg' => $message], 200);
        } catch (\Throwable $t) {
            return response()->json(['msg' => 'Oops! Terjadi kesalahan, silakan coba lagi.'], 400);
        }
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $request->validate([
                'upload' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $file = $request->file('upload');

            $result = Storage::disk('imagekit')->put('ckeditor', $file);
            $url = env('IMAGEKIT_ENDPOINT_URL') . $result;
            return response()->json(['fileName' => $result, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
