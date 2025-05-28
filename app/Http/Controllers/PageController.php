<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Property;
use App\Models\Homestay;
use Illuminate\Http\Request;
use App\Models\Layanan;


class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function layanan() {
        $data = Layanan::all();
        return view('layanan', compact('data'));
    }

    public function property() {
        $data = Property::all();
        return view('property', compact('data'));
    }

    public function homestay() {
        $data = Homestay::all();
        return view('homestay', compact('data'));
    }

    // Tambahan untuk halaman contact (GET)
    public function contact() {
        return view('contact');
    }

    // Tambahan untuk proses form contact (POST)
    public function sendContact(Request $request) {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Untuk sementara: hanya tampilkan data yang dikirim
        // dd($request->all());

        // Nanti bisa dikembangkan untuk:
        // - Simpan ke database
        // - Kirim email ke admin

        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
