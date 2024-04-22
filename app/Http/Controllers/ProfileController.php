<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = auth()->user();

        return view("profile.profile", ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request)
    {
        $validated = $request->validated();
        $user = auth()->user();

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

        return back()->with("success", "Profil berhasil diperbarui");
    }
}
