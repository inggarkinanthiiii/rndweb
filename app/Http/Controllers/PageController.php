<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Property;
use App\Models\Homestay;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }
    
    public function index()
    {
        return view('home');
    }

    public function layanan()
    {
        $data = Layanan::all();
        return view('layanan', compact('data'));
    }

    public function portfolio()
    {
        $data = Portfolio::all();
        return view('portfolio', compact('data'));
    }

    public function property()
    {
        $data = Property::all();
        return view('property', compact('data'));
    }

    public function homestay()
    {
        $data = Homestay::all();
        return view('homestay', compact('data'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
