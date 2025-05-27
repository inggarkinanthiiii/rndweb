<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller

    /**
     * Display a listing of the resource.
     */
   public function index() {
    $data = Portfolio::all();
    return view('admin.portfolio.index', compact('data'));
}

public function create() {
    return view('admin.portfolio.create');
}

public function store(Request $request) {
    $data = $request->validate([
        'client' => 'required',
        'location' => 'required',
        'area' => 'required',
        'type' => 'required',
        'description' => 'nullable',
        'image' => 'nullable|image'
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('portfolio', 'public');
    }

    Portfolio::create($data);
    return redirect()->route('portfolio.index');
}
