<?php

return [
    "data" => [
        "attachment" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],
        "subject" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],
        "signed_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],
        "recipient_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],
        "recipient_address" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],
        "event_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],
        "event_time" => [
            "validate" => "nullable|date_format:H:m:s",
            "cast" => "time",
        ],
        "event_place" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],
        "event_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],
        "signed_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],
        "signed_position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],
    ],

    "errorKey" => [
        "attachment" => "Lampiran",
        "subject" => "Perihal",
        "signed_date" => "Tanggal tanda tangan surat",
        "recipient_name" => "Nama penerima surat",
        "recipient_address" => "Alamat penerima surat",
        "purpose_of_invitation" => "Maksud surat undangan",
        "event_date" => "Tanggal acara",
        "event_time" => "Waktu acara",
        "event_place" => "Tempat acara",
        "event_name" => "Nama acara",
        "signed_name" => "Nama yang bertanda tangan",
        "signed_position" => "Jabatan yang bertanda tangan",
    ],
];
