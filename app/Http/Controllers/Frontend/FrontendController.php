<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repositories\CategoryRepository;
use Repositories\ConstructionRepository;
use Repositories\KeywordRepository;
use App\Repositories\ProductRepository;
use Repositories\NewsRepository;

class FrontendController extends Controller {

    public function __construct(ProductRepository $productRepo, NewsRepository $newsRepo) {
        $this->productRepo = $productRepo;
        $this->newsRepo = $newsRepo;
    }
    public function index() {
        //cart
        $total = 0;
        if (!is_null(session('cart'))) {
            foreach (session('cart') as $key => $val) {
                $total += ($val['price'] * $val['quantity']);
            }
        }
        $product_new = $this->productRepo->readNewProduct($limit = 10);
        $hot_products_slide = $this->productRepo->readHlProduct($limit = 3);
        $product_hl = $this->productRepo->readHlProduct($limit = 10);
        $product_cs = $this->productRepo->readCsProduct($limit = 10);
        $news_big = $this->newsRepo->getAllNews($limit = 1);
        $news_arr = $this->newsRepo->getAllNews($limit = 6);
        if (config('global.device') != 'pc') {
            return view('mobile/home/index', compact('total','hot_products_slide','product_new', 'product_hl', 'product_cs', 'news_big', 'news_arr'));
        } else {
            return view('frontend/home/index', compact('total','hot_products_slide','product_new', 'product_hl', 'product_cs', 'news_big', 'news_arr'));
        }
    }
    
}
