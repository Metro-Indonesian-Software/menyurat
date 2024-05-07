<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::role("user")
                    ->search($request->query("search"))
                    ->active($request->query("active"))
                    ->paginate(10)
                    ->withQueryString();

        return view('admin.pengguna.index', ["users" => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $validated["password"] = Hash::make("12345678");
        $user = User::create($validated);
        $user->assignRole("user");

        return back()->with("success", "Pengguna berhasil ditambahkan");
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();

        return back()->with("success", "Pengguna berhasil dihapus");
    }
}
