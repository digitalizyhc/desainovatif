<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RahulHaque\Filepond\Facades\Filepond;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Product - Desa ' . ucwords(tenant('name')) ;
        $tenant = Tenant::where('id', auth()->user()->tenant?->id)->first();
        $products = Product::where('tenant_id', $tenant->id)
            ->filter(request())
            ->latest()
            ->paginate(request()->row ?? 10);

        $data = [
            'title'    => $title,
            'products' => $products,
        ];

        return view('pages.tenant.product.index', $data);
    }

    public function create()
    {
        $data = [
            'url'        => route('tenant.product.store'),
            'title'      => 'Tambah Produk',
        ];

        return view('pages.tenant.product._create', $data);
    }

    public function store(Request $request)
    {
        $isEndPriceRequired = $request->has('end_price_required') ? 'required' : 'nullable';
        $request->validate([
            'name'              => ['required', 'string', 'max:150'],
            'slug'              => ['required', 'string'],
            'image'             => ['required', 'array'],
            'image.*'           => Rule::filepond(['image:jpg,jpeg,png', 'max:2048']),
            'description'       => ['required', 'string'],
            'first_price'       => ['required', 'string'],
            'end_price'         => [$isEndPriceRequired, 'string'],
        ]);

        DB::beginTransaction();
        try {
            $firstPrice    = $request->has('end_price_required') ? removeRupiah($request->first_price) : 0;
            $endPrice      = $request->has('end_price_required') ? removeRupiah($request->end_price) : removeRupiah($request->first_price);

            $data = [
                'name'              => $request->name,
                'slug'              => $request->slug,
                'first_price'       => $firstPrice,
                'end_price'         => $endPrice,
                'description'       => $request->description,
                'is_recommendation' => $request->has('is_recommendation') ? true : false,
                'is_best_seller'    => $request->has('is_best_seller') ? true : false,
                'tenant_id'         => auth()->user()->tenant?->id,
            ];

            $product = Product::create($data);

            $fileInfo = Filepond::field($request->image);
            foreach ($fileInfo->getFile() as $file) {
                $product->addMedia($file->getPathname())->toMediaCollection('product');
            }
            $fileInfo->delete();

            DB::commit();
            return back()->with('success', 'Berhasil Menambahkan Produk');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withInput()->with('error', $th->getMessage());
        }
    }

    public function edit(Product $product)
    {
        $data = [
            'product'     => $product,
            'url'         => route('tenant.product.update', $product),
            'title'       => 'Edit Produk',
        ];

        return view('pages.tenant.product._create', $data);
    }

    public function update(Request $request, Product $product)
    {
        $isEndPriceRequired = $request->has('end_price_required') ? 'required' : 'nullable';
        $image = $request->image;
        $request->validate([
            'name'              => ['required', 'string', 'max:150'],
            'slug'              => ['required', 'string'],
            'image'             => isset($image) ? ['required', 'array'] : ['nullable'],
            'image.*'           => isset($image) ? Rule::filepond(['image:jpg,jpeg,png', 'max:2048']) : ['nullable'],
            'description'       => ['required', 'string'],
            'first_price'       => ['required', 'string'],
            'end_price'         => [$isEndPriceRequired, 'string'],
        ]);

        DB::beginTransaction();
        try {
            $firstPrice    = $request->has('end_price_required') ? removeRupiah($request->first_price) : 0;
            $endPrice      = $request->has('end_price_required') ? removeRupiah($request->end_price) : removeRupiah($request->first_price);

            $data = [
                'name'              => $request->name,
                'slug'              => $request->slug,
                'first_price'       => $firstPrice,
                'end_price'         => $endPrice,
                'description'       => $request->description,
                'is_recommendation' => $request->has('is_recommendation') ? true : false,
                'is_best_seller'    => $request->has('is_best_seller') ? true : false,
            ];

            $product->update($data);

            if (isset($image)) {
                $fileInfo = Filepond::field($image);
                foreach ($fileInfo->getFile() as $file) {
                    $product->addMedia($file->getPathname())->toMediaCollection('product');
                }
                $fileInfo->delete();
            }

            DB::commit();
            return back()->with('success', 'Berhasil Mengubah Produk');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withInput()->with('error', $th->getMessage());
        }
    }

    public function togglePublish(Request $request)
    {
        try {
            Product::where('id', $request->id)->update([
                'is_published' => $request->isPublish,
            ]);

            $message = $request->isPublish ? 'Product berhasil di-publish' : 'Product berhasil di-unpublish';

            return response()->json(['msg' => $message], 200);
        } catch (\Throwable $t) {
            return response()->json(['msg' => 'Oops! Terjadi kesalahan, silakan coba lagi.'], 400);
        }
    }

    public function destroy(Product $product)
    {
        try {
            $product->clearMediaCollection('product');
            $product->delete();
            return back()->with('success', 'Berhasil Menghapus Data.');;
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function deleteImage(Product $product, $id)
    {
        try {
            if ($product->getMedia('product')->count() <= 1) {
                // throw error
                throw new \Exception('Gambar tidak boleh kosong');
            }
            $product->deleteMedia($id);
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }
}
