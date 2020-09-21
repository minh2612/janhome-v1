<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller {

    public function index() {

        if (config('global.device') != 'pc') {
            return view('mobile/home/about');
        } else {
            return view('frontend/home/about');
        }
    }

}
