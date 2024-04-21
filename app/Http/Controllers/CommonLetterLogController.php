<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommonLetterLogRequest;
use App\Models\CommonLetterLog;
use Illuminate\Http\Request;

class CommonLetterLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $letters = config("central.letter_types");

        if($request->query("search") !== null) {
            $letters = array_filter($letters, function($name) use($request) {
                return str_contains(strtolower($name), strtolower($request->query("search")));
            }, ARRAY_FILTER_USE_KEY);
        }

        return view("user.kelola_surat.index", ["letters" => $letters]);
    }

    public function listIndex(Request $request, string $slug) {
        $commonLetterLogs = CommonLetterLog::where("type", $slug)
                                ->limit(100)
                                // ->published($request->input("published"))
                                ->get();

        return view("user.kelola_surat.child_kelola_surat.index", ["commonLetterLogs" => $commonLetterLogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommonLetterLogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CommonLetterLog $commonLetterLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CommonLetterLog $commonLetterLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CommonLetterLog $commonLetterLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommonLetterLog $commonLetterLog)
    {
        //
    }
}
