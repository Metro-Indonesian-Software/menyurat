<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Models\Region;
use App\Models\UrbanVillage;
use Illuminate\Http\JsonResponse;

class GeograpicController extends Controller
{
    public function getRegion(Province $province): JsonResponse
    {
        $regions = Region::where("province_id", $province->id)
                        ->get();

        return response()->json([
            "status" => "success",
            "message" => "Data fetched successfully",
            "data" => $regions,
        ]);
    }

    public function getDistrict(Region $region): JsonResponse
    {
        $districts = District::where("region_id", $region->id)
                        ->get();

        return response()->json([
            "status" => "success",
            "message" => "Data fetched successfully",
            "data" => $districts,
        ]);
    }

    public function getUrbanVillage(District $district): JsonResponse
    {
        $urbanVillages = UrbanVillage::where("district_id", $district->id)
                        ->get();

        return response()->json([
            "status" => "success",
            "message" => "Data fetched successfully",
            "data" => $urbanVillages,
        ]);
    }
}
