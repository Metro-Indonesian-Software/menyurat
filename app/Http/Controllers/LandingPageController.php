<?php

namespace App\Http\Controllers;

class LandingPageController extends Controller
{
    public function index() {
        // TODO View: view blade belum diganti dengan halaman landing page
        return redirect("/login");
    }
}
