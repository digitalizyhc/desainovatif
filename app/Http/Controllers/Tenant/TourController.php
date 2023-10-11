<?php

namespace App\Http\Controllers\tenant;

use App\Models\Tour;
use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Requests\TourRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RahulHaque\Filepond\Facades\Filepond;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Tour - Desa ' . ucwords(tenant('name')) ;
        $tenant = Tenant::where('id', auth()->user()->tenant?->id)->first();
        $tours  = Tour::where('tenant_id', $tenant->id)
            ->filter(request())
            ->latest()
            ->paginate(request()->row ?? 10);

        $data = [
            'title' => $title,
            'tours' => $tours,
        ];

        return view('pages.tenant.tour.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'url'    => route('tenant.tour.store'),
            'title'  => 'Tambah Tempat Wisata',
        ];

        return view('pages.tenant.tour._create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TourRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = [
                'name'        => $request->name,
                'slug'        => $request->slug,
                'category'    => $request->category,
                'description' => $request->description,
                'tenant_id'   => auth()->user()->tenant?->id,
            ];

            $tour = Tour::create($data);

            $fileInfo = Filepond::field($request->image);

            if ($fileInfo->getFile() === null) {
                return back()->with('error', 'Cover Harus diisi')->withInput();
            }

            $tour->addMedia($fileInfo->getFile()->getPathname())->toMediaCollection('tour');
            $fileInfo->delete();

            if (isset($request->gallery)) {
                $gallery = Filepond::field($request->gallery);
                foreach ($gallery->getFile() as $file) {
                    $tour->addMedia($file->getPathname())->toMediaCollection('tour-gallery');
                }
                $gallery->delete();
            }

            DB::commit();
            return back()->with('success', 'Berhasil Menambahkan Data.');
        } catch (\Throwable $th) {
            DB::rollBack();
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
    public function edit(Tour $tour)
    {
        $data = [
            'tour'  => $tour,
            'url'   => route('tenant.tour.update', $tour),
            'title' => 'Edit Tempat Wisata',
        ];

        return view('pages.tenant.tour._create', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TourRequest $request, Tour $tour)
    {
        $imageGallery = $request->gallery;
        DB::beginTransaction();
        try {
            $data = [
                'name'        => $request->name,
                'category'    => $request->category,
                'description' => $request->description,
                'slug'        => $request->slug,
            ];

            $tour->update($data);
            $fileInfo = Filepond::field($request->image);
            if ($fileInfo->getFile() !== null) {
                if ($tour->getFirstMediaUrl('tour')) {
                    $tour->clearMediaCollection('tour');
                    $tour->addMedia($fileInfo->getFile()->getPathname())->toMediaCollection('tour');
                } else {
                    $tour->addMedia($fileInfo->getFile()->getPathname())->toMediaCollection('tour');
                }
                $fileInfo->delete();
            }

            if (isset($imageGallery)) {
                $gallery = Filepond::field($imageGallery);
                foreach ($gallery->getFile() as $file) {
                    $tour->addMedia($file->getPathname())->toMediaCollection('tour-gallery');
                }
                $gallery->delete();
            }

            DB::commit();
            return back()->with('success', 'Berhasil Mengubah Data.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        try {
            $tour->delete();
            return back()->with('success', 'Berhasil Menghapus Data.');;
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function togglePublish(Request $request)
    {
        try {
            Tour::where('id', $request->id)->update([
                'is_published' => $request->isPublish,
            ]);

            $message = $request->isPublish ? 'Wisata berhasil di-publish' : 'Wisata berhasil di-unpublish';

            return response()->json(['msg' => $message], 200);
        } catch (\Throwable $t) {
            return response()->json(['msg' => 'Oops! Terjadi kesalahan, silakan coba lagi.'], 400);
        }
    }

    public function deleteImage(Tour $tour, $id)
    {
        try {
            $tour->deleteMedia($id);
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }
}
