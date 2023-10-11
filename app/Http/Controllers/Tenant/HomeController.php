<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Post;
use App\Models\Tour;
use App\Models\Message;
use App\Models\Product;
use App\Models\Infografis;
use Illuminate\Http\Request;
use App\Models\DemografiPekerjaan;
use App\Models\DemografiPendidikan;
use App\Http\Controllers\Controller;

use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Desa ' . ucwords(tenant('name'));
        $firstArticle = Post::where('tenant_id', tenant('id'))->isPublished()->latest()->first();
        $articles = Post::where('tenant_id', tenant('id'))
            ->isPublished()
            ->latest()
            ->offset(1)
            ->limit(3)
            ->get();
        $products = Product::where('tenant_id', tenant('id'))
            ->isPublished()
            ->isRecommendation()
            ->isBestSeller()
            ->latest()
            ->limit(4)
            ->get();

        SEOTools::setTitle($title);
        SEOTools::setDescription('Ini adalah halaman homepage dari desa ' . tenant('name'));
        SEOTools::setCanonical(route('tenant.home'));

        $data = [
            'firstArticle'  => $firstArticle,
            'articles'      => $articles,
            'products'      => $products,
        ];

        return view('pages.tenant.home.index', $data);
    }

    public function article()
    {
        $title = 'Berita - Desa ' . ucwords(tenant('name'));
        $firstArticle = Post::where('tenant_id', tenant('id'))
            ->isPublished()
            ->latest()
            ->first();
        $articles = Post::where('tenant_id', tenant('id'))
            ->isPublished()
            ->latest()
            ->paginate(6);

        SEOTools::setTitle($title);
        SEOTools::setDescription('Ini adalah halaman berita dari desa ' . tenant('name'));
        SEOTools::setCanonical(route('tenant.berita'));

        $data = [
            'title'        => $title,
            'firstArticle' => $firstArticle,
            'articles'     => $articles,
        ];
        return view('pages.tenant.home.article.index', $data);
    }

    public function articleDetail($slug)
    {
        $title = 'Berita - Desa ' . ucwords(tenant('name')) ;
        $article = Post::where('tenant_id', tenant('id'))
            ->where('slug', $slug)
            ->isPublished()
            ->first();
            if (!$article) {
                return back()->with('error', 'Berita tidak ditemukan');
            }

        $article->vzt()->increment();

        SEOTools::setTitle($article->title . ' - Desa ' . ucwords(tenant(('name'))));
        SEOTools::setDescription(strip_tags($article->body));
        SEOTools::metatags()->addMeta('article:published_time', $article->created_at->toW3CString(), 'property');
        SEOTools::metatags()->addMeta('article:section', $article->category?->name, 'property');
        SEOTools::setCanonical(route('tenant.berita-detail', $article->slug));
        SEOTools::opengraph()->setUrl(route('tenant.berita-detail', $article->slug));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addImage($article->cover_url);

        $data = [
            'title'   => $title,
            'article' => $article,
            'visit'   => $article->vzt()->count(),
        ];
        return view('pages.tenant.home.article.detail', $data);
    }

    public function tour()
    {
        $title = 'Wisata - Desa ' . ucwords(tenant('name')) ;
        $firstTour = Tour::where('tenant_id', tenant('id'))
            ->isPublished()
            ->latest()
            ->first();
        $tours = Tour::where('tenant_id', tenant('id'))
            ->isPublished()
            ->latest()
            ->paginate(6);

        SEOTools::setTitle($title);
        SEOTools::setDescription('Ini adalah halaman wisata dari desa ' . tenant('name'));
        SEOTools::setCanonical(route('tenant.wisata'));

        $data = [
            'title'     => $title,
            'firstTour' => $firstTour,
            'tours'     => $tours,
        ];
        return view('pages.tenant.home.tour.index', $data);
    }

    public function tourDetail($slug)
    {
        $title = 'Wisata - Desa ' . ucwords(tenant('name'));
        $tour = Tour::where('tenant_id', tenant('id'))
            ->where('slug', $slug)
            ->isPublished()
            ->first();
        $tours = Tour::where('tenant_id', tenant('id'))
            ->where('id', '<>', $tour->id)
            ->isPublished()
            ->inRandomOrder()
            ->limit(3)
            ->get();
        if (!$tour) {
            return back()->with('error', 'Tempat Wisata tidak ditemukan');
        }

        SEOTools::setTitle($tour->name . ' - Desa ' . ucwords(tenant(('name'))));
        SEOTools::setDescription(strip_tags($tour->description));
        SEOTools::metatags()->addMeta('article:published_time', $tour->created_at->toW3CString(), 'property');
        SEOTools::metatags()->addMeta('article:section', $tour->category, 'property');
        SEOTools::setCanonical(route('tenant.wisata-detail', $tour->slug));
        SEOTools::opengraph()->setUrl(route('tenant.wisata-detail', $tour->slug));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addImage($tour->cover_url);

        $data = [
            'title' => $title,
            'tour'  => $tour,
            'tours' => $tours,
        ];

        return view('pages.tenant.home.tour.detail', $data);
    }

    public function product()
    {
        $title = 'Produk - Desa ' . ucwords(tenant('name'));
        $products = Product::where('tenant_id', tenant('id'))
            ->isPublished()
            ->latest()
            ->limit(4)
            ->get();
        $recommendationProducts = Product::where('tenant_id', tenant('id'))
            ->isPublished()
            ->isRecommendation()
            ->latest()
            ->limit(4)
            ->get();
        $bestSellerProducts = Product::where('tenant_id', tenant('id'))
            ->isPublished()
            ->isBestSeller()
            ->latest()
            ->paginate(8, ['*'], 'best_seller_page');

        SEOTools::setTitle($title);
        SEOTools::setDescription('Ini adalah halaman produk dari desa ' . tenant('name'));
        SEOTools::setCanonical(route('tenant.produk'));

        $data = [
            'title'                  => $title,
            'products'               => $products,
            'recommendationProducts' => $recommendationProducts,
            'bestSellerProducts'     => $bestSellerProducts,
        ];
        return view('pages.tenant.home.product.index', $data);
    }

    public function productDetail($slug)
    {
        $title = 'Produk - Desa ' . ucwords(tenant('name'));
        $product = Product::where('tenant_id', tenant('id'))
            ->where('slug', $slug)
            ->isPublished()
            ->first();
        if (!$product) {
            return back()->with('error', 'Product tidak ditemukan');
        }
        $recommendationProducts = Product::where('tenant_id', tenant('id'))
            ->isPublished()
            ->isRecommendation()
            ->latest()
            ->limit(4)
            ->get();

        SEOTools::setTitle($product->name . ' - Desa ' . ucwords(tenant(('name'))));
        SEOTools::setDescription(strip_tags($product->description));
        SEOTools::metatags()->addMeta('article:published_time', $product->created_at->toW3CString(), 'property');
        SEOTools::setCanonical(route('tenant.produk-detail', $product->slug));
        SEOTools::opengraph()->setUrl(route('tenant.produk-detail', $product->slug));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addImage($product->product_cover_url);

        $data = [
            'title'                  => $title,
            'product'                => $product,
            'recommendationProducts' => $recommendationProducts,
        ];
        return view('pages.tenant.home.product.detail', $data);
    }

    public function infografis()
    {
        $title = 'Infografis - Desa ' . ucwords(tenant('name'));
        $infografis = Infografis::where('tenant_id', tenant('id'))->first();
        $education  = DemografiPendidikan::where('tenant_id', tenant('id'))->first();
        $work       = DemografiPekerjaan::where('tenant_id', tenant('id'))->first();

        SEOTools::setTitle($title);
        SEOTools::setDescription('Ini adalah halaman infografis dari desa ' . tenant('name'));
        SEOTools::setCanonical(route('tenant.infografis'));

        $data = [
            'title'      => $title,
            'infografis' => $infografis,
            'education'  => $education,
            'work'       => $work,
        ];

        return view('pages.tenant.home.infografis.index', $data);
    }

    public function contact()
    {
        $title = 'Kontak - Desa ' . ucwords(tenant('name'));

        SEOTools::setTitle($title);
        SEOTools::setDescription('Ini adalah halaman kontak dari desa ' . tenant('name'));
        SEOTools::setCanonical(route('tenant.contact'));

        $data = [
            'title' => $title,
        ];
        return view('pages.tenant.home.contact.index', $data);
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'name'    => ['required', 'string', 'max:150'],
            'email'   => ['required', 'string', 'email'],
            'message' => ['required', 'string'],
            'tenant'  => ['required', 'exists:tenants,id']
        ]);

        try {
            $data = ([
                'name'             => $request->name,
                'email'            => $request->email,
                'message'          => $request->message,
                'messageable_type' => get_class(tenant()),
                'messageable_id'   => $request->tenant,
            ]);

            Message::create($data);

            return back()->with('success', 'Berhasil Mengirim Pesan');
        } catch (\Throwable $th) {
            return back()->with('error', 'Pesan Gagal terkirim');
        }
    }
}
