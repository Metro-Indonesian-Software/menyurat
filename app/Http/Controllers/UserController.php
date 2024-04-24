<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(10);

        // TODO View: view blade belum diganti dengan halaman kelola pengguna:fixed
        return view('admin.pengguna.index', ["users" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // TODO View: view blade belum diganti dengan halaman tambah pengguna:tidak jadi pakai view create
        return view(null);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        // TODO: password default bagaimana?
        $validated = $request->validated();
        // User::create($validated);

        return route("user.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // TODO View: view blade belum diganti dengan halaman lihat data pengguna
        return view(null, ["user" => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // TODO View: view blade belum diganti dengan halaman edit data pengguna
        return view(null, ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $validated = $request->validated();

        // delete previous logo
        if($user->logo_url !== null) {
            // dd($user->logo_url);
            Storage::disk("public")->delete($user->logo_url);
        }

        // save image in folder
        $imagePath = Storage::disk("public")->put(config("central.paths.company_logo"), $validated["logo"]);
        unset($validated["logo"]);
        $validated["logo_url"] = $imagePath;

        User::where("id", $user->id)
            ->update($validated);

        return redirect()->route("user.index")->with("success", "Profil pengguna berhasil diperbarui");
    }
}
