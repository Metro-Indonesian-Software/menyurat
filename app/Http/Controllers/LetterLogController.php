<?php

namespace App\Http\Controllers;

use App\Models\CommonLetterLog;
use App\Models\LetterLog;

class LetterLogController extends Controller
{
    public function create(CommonLetterLog $commonLetterLog)
    {
        $letterLogs = LetterLog::where("common_letter_log_id", $commonLetterLog->id)->get();
        $view = config(sprintf("central.letter_types.%s.view", $commonLetterLog->type));

        return view($view, ["title" => $commonLetterLog->title, "letterLogs" => $letterLogs]);
    }

    public function store(CommonLetterLog $commonLetterLog)
    {
        // TODO: soon
    }
}
