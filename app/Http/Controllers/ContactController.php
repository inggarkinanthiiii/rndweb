<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Contoh: kirim email ke admin (kamu bisa sesuaikan)
        $data = $request->only('name', 'email', 'message');

        // Kirim email menggunakan Laravel Mail (pastikan konfigurasi mail sudah benar)
        Mail::send('emails.contact', $data, function ($msg) use ($data) {
            $msg->to('admin@domain.com', 'Admin')
                ->subject('Pesan Kontak dari ' . $data['name']);
            $msg->from($data['email'], $data['name']);
        });

        // Redirect balik ke halaman contact dengan pesan sukses
        return redirect()->route('contact')->with('success', 'Pesan Anda telah terkirim!');
    }
}
