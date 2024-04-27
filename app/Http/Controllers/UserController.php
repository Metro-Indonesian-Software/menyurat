<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        $validated["password"] = Hash::make("password");
        $user = User::create($validated);
        $user->assignRole("user");

        return redirect()->back()->with("success", "Pengguna berhasil ditambahkan");
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

    public function destroy(Request $request, User $user)
    {
        $user->delete();

        return redirect()->back()->with("success", "Pengguna berhasil dihapus");
    }
}
