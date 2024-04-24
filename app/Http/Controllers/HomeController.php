<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $user = auth()->user();

        if($user->hasRole("admin")) {
            return $this->adminDashboard($user);
        }
        else {
            return $this->userDashboard($user);
        }
    }

    protected function adminDashboard(User $user)
    {
        // TODO View: view blade belum diganti dengan halaman dashboard admin:fixed
        $letters = config("central.letter_types");
        $users = User::latest()->paginate(10);
        $total_user = User::Count();
        return view('admin.dashboard.index', [
            "users" => $users,
            "total_user"=>$total_user
        ]);
    }

    protected function userDashboard(User $user)
    {
        $letters = config("central.letter_types");

        return view('user.dashboard.index', ["letters" => $letters]);
    }
}
