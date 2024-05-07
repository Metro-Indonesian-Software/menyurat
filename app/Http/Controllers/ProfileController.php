<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\Province;
use App\Models\UrbanVillage;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = auth()->user();
        $provinces = Province::all();

        return view("profile.profile", ["user" => $user, "provinces" => $provinces]);
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
            Storage::disk("public")->delete($user->logo_url);
        }

        // save image in folder
        $imagePath = Storage::disk("public")->put(config("central.paths.company_logo"), $validated["logo"]);
        unset($validated["logo"]);

        // get postal code
        $urbanVillage = UrbanVillage::where("id", $validated["urban_village_id"])
                        ->first();


        // add other value
        $validated["logo_url"] = $imagePath;
        $validated["completed"] = true;
        $validated["postal_code"] = $urbanVillage->postal_code;

        User::where("id", $user->id)
            ->update($validated);

        return back()->with("success", "Profil pengguna berhasil diperbarui");
    }
}
