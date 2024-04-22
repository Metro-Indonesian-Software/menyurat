<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{
    public function update(UpdatePasswordRequest $request)
    {
        $validated = $request->validated();
        $user = auth()->user();

        // check old password
        if(Hash::check($validated["current_password"], $user->password)) {
            $user->password = Hash::make($validated["new_password"]);

            if($user->save()) {
                Auth::guard()->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return $request->wantsJson()
                    ? new JsonResponse([], 204)
                    : redirect()->route("login")->with("success", "Password berhasil diperbarui");
            }
        }
        else {
            return back()->with("error", "Password lama tidak valid");
        }
    }
}
