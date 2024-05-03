<?php

return [
    "data" => [
        /**
         * @param string
         * ? Perihal
         * cara akses data : $variable["subject"]
         * atribut name di html : subject
         */
        "subject" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Nama penerima surat
         * cara akses data : $variable["recipient_name"]
         * atribut name di html : recipient_name
         */
        "recipient_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Jabatan penerima surat
         * cara akses data : $variable["recipient_position"]
         * atribut name di html : recipient_position
         */
        "recipient_position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],

        /**
         * @param date
         * ? Tanggal pelanggaran
         * cara akses data : $variable["violation_date"]
         * atribut name di html : violation_date
         */
        "violation_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],

        /**
         * @param string
         * ? Deskripsi pelanggaran
         * cara akses data : $variable["violation_description"]
         * atribut name di html : violation_description
         */
        "violation_description" => [
            "validate" => "nullable|string|min:10",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Tempat tanda tangan surat
         * cara akses data : $variable["signed_place"]
         * atribut name di html : signed_place
         */
        "signed_place" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],

        /**
         * @param date
         * ? Tanggal tanda tangan surat
         * cara akses data : $variable["signed_date"]
         * atribut name di html : signed_date
         */
        "signed_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],

        /**
         * @param string
         * ? Nama yang bertandatangan
         * cara akses data : $variable["signed_name"]
         * atribut name di html : signed_name
         */
        "signed_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Jabatan yang bertandatangan
         * cara akses data : $variable["signed_position"]
         * atribut name di html : signed_position
         */
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
