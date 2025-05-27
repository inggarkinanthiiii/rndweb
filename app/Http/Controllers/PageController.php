<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Property;
use App\Models\Homestay;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function portfolio() {
        $data = Portfolio::all();
        return view('portfolio', compact('data'));
    }

    public function property() {
        $data = Property::all();
        return view('property', compact('data'));
    }

    public function homestay() {
        $data = Homestay::all();
        return view('homestay', compact('data'));
    }
}
