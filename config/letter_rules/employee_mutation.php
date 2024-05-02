<?php

return [
    "data" => [
        "signed_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],
        "signed_position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],
        "mutated_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],
        "mutated_position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],
        "new_position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],
        "new_office_location" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],
        "effective_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],
        "signed_place" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],
        "signed_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],
    ],

    "errorKey" => [
        "signed_name" => "Nama yang bertanda tangan",
        "signed_position" => "Jabatan yang bertanda tangan",
        "mutated_name" => "Nama yang dimutasi",
        "mutated_position" => "Jabatan yang dimutasi",
        "new_position" => "Jabatan baru",
        "new_office_location" => "Lokasi kantor baru",
        "effective_date" => "Tanggal berlaku",
        "signed_place" => "Tempat tanda tangan surat",
        "signed_date" => "Tanggal tanda tangan surat",
    ],
];
