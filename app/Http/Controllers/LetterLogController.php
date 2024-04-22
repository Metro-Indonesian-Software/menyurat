<?php

namespace App\Http\Controllers;

use App\Models\CommonLetterLog;
use App\Models\LetterLog;
use Illuminate\Http\Request;

class LetterLogController extends Controller
{
    public function create(CommonLetterLog $commonLetterLog)
    {
        $letterLogs = LetterLog::where("common_letter_log_id", $commonLetterLog->id)->get();

        return view("user.buat_surat.create", ["title" => $commonLetterLog->title, "letterLogs" => $letterLogs]);
    }

    public function store(CommonLetterLog $commonLetterLog)
    {
        // TODO: soon
    }
}
