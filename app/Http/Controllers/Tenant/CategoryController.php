<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Category - Desa ' . ucwords(tenant('name'));
        $tenant      = Tenant::where('id', auth()->user()->tenant?->id)->first();
        $allCategory = Category::filter(request())
            ->where('tenant_id', $tenant->id)
            ->latest()
            ->paginate(request()->row ?? 10);

        $data = [
            'title'       => $title,
            'allCategory' => $allCategory,
        ];

        return view('pages.tenant.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'url' => route('tenant.category.store'),
            'title' => 'Tambah Kategori',
        ];

        return view('pages.tenant.category._create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = [
                'name'      => $request->name,
                'slug'      => Str::slug($request->name, '-'),
                'tenant_id' => auth()->user()->tenant?->id,
            ];

            Category::create($data);

            return back()->with('success', 'Berhasil Menambahkan Data.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
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
    public function edit(Category $category)
    {
        $data = [
            'category' => $category,
            'url'      => route('tenant.category.update', $category),
            'title'    => 'Edit Kategori Artikel',
        ];

        return view('pages.tenant.category._create', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        try {
            $data = [
                'name' => $request->name,
                'slug' => Str::slug($request->name, '-'),
                'tenant_id' => auth()->user()->tenant?->id,
            ];

            $category->update($data);

            return back()->with('success', 'Berhasil Mengubah Data.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->posts->count() > 0) {
            return back()->with('error', 'Kategori sedang digunakan');
        }

        try {
            $category->delete();
            return back()->with('success', 'Berhasil Menghapus Data.');;
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
