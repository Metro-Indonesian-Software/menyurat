<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommonLetterLogRequest;
use App\Http\Requests\StoreCommonLogSlugRequest;
use App\Http\Requests\UpdateCommonLetterLogRequest;
use App\Models\CommonLetterLog;
use Illuminate\Http\Request;
use stdClass;

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
        $splitSlug = explode("-", $slug);
        $letterType = implode(" ", $splitSlug);
        $existLetterType = false;

        // check letter type
        foreach(array_keys(config("central.letter_types")) as $key) {
            if(strtolower($letterType) === strtolower($key)) {
                $letterType = $key;
                $existLetterType = true;
            }
        }

        if(!$existLetterType) {
            return abort(404);
        }

        $commonLetterLogs = CommonLetterLog::where("type", $letterType)
                                ->limit(100)
                                // ->published($request->input("published"))
                                ->get();


        return view("user.kelola_surat.child_kelola_surat.index", ["title" => $letterType, "commonLetterLogs" => $commonLetterLogs]);
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
        $validated = $request->validated();

        // check letter type
        if(!array_key_exists($validated["type"], config("central.letter_types"))) {
            return back()->with("error", "Surat gagal ditambahkan");
        }

        $commonLetterLog = CommonLetterLog::create([
            "user_id" => auth()->user()->id,
            "title" => $validated["title"],
            "type" => $validated["type"],
        ]);

        return redirect()->route("letter.log.create", ["commonLetterLog" => $commonLetterLog->id])->with("success", "Surat berhasil ditambahkan");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeSlug(StoreCommonLogSlugRequest $request, string $slug)
    {
        $validated = $request->validated();
        $splitSlug = explode("-", $slug);
        $letterType = implode(" ", $splitSlug);
        $existLetterType = false;

        // check letter type
        foreach(array_keys(config("central.letter_types")) as $key) {
            if(strtolower($letterType) === strtolower($key)) {
                $letterType = $key;
                $existLetterType = true;
            }
        }

        if(!$existLetterType) {
            return back()->with("error", "Surat gagal ditambahkan");
        }

        $commonLetterLog = CommonLetterLog::create([
            "user_id" => auth()->user()->id,
            "title" => $validated["title"],
            "type" => $letterType,
        ]);

        return redirect()->route("letter.log.create", ["commonLetterLog" => $commonLetterLog->id])->with("success", "Surat berhasil ditambahkan");
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
    public function update(UpdateCommonLetterLogRequest $request, CommonLetterLog $commonLetterLog)
    {
        $validated = $request->validated();

        CommonLetterLog::where("id", $commonLetterLog->id)
            ->update([
                "title" => $validated["title"],
            ]);

        // response fetch api
        $response = new stdClass;
        $response->status = 'success';
        $response->message = 'Judul berhasil diperbarui';
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommonLetterLog $commonLetterLog)
    {
        //
    }
}