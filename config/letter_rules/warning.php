<?php

return [
  "data" => [
    "subject" => [
        "validate" => "nullable|string",
        "cast" => "string",
    ],
    "recipient_name" => [
        "validate" => "nullable|string|min:3",
        "cast" => "string",
    ],
    "recipient_position" => [
        "validate" => "nullable|string",
        "cast" => "string",
    ],
    "violation_date" => [
        "validate" => "nullable|string",
        "cast" => "string",
    ],
    "violation_description" => [
        "validate" => "nullable|string|min:10",
        "cast" => "string",
    ],
    "signed_place" => [
        "validate" => "nullable|string|min:5",
        "cast" => "string",
    ],
    "signed_date" => [
        "validate" => "nullable|date",
        "cast" => "date",
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
        "subject" => "Perihal",
        "recipient_name" => "Nama penerima surat",
        "recipient_position" => "Jabatan penerima surat",
        "violation_date" => "Tanggal pelanggaran",
        "violation_description" => "Deskripsi pelanggaran",
        "signed_place" => "Tempat tanda tangan surat",
        "signed_date" => "Tanggal tanda tangan surat",
        "signed_name" => "Nama yang bertanda tangan",
        "signed_position" => "Jabatan yang bertanda tangan",
    ],
];
