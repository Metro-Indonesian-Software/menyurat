<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index() {
        // TODO View: view blade belum diganti dengan halaman landing page
        return redirect("/login");
    }
}
