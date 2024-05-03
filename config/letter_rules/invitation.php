<?php

return [
    "data" => [
        /**
         * @param string
         * ? Lampiran
         * cara akses data : $variable["attachment"]
         * atribut name di html : attachment
         */
        "attachment" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],

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
         * ? Alamat penerima surat
         * cara akses data : $variable["recipient_address"]
         * atribut name di html : recipient_address
         */
        "recipient_address" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],

        /**
         * @param date
         * ? Tanggal acara
         * cara akses data : $variable["event_date"]
         * atribut name di html : event_date
         */
        "event_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],

        /**
         * @param time
         * ? Jam acara
         * cara akses data : $variable["event_time"]
         * atribut name di html : event_time
         */
        "event_time" => [
            "validate" => "nullable|date_format:H:m:s",
            "cast" => "time",
        ],

        /**
         * @param string
         * ? Tempat acara
         * cara akses data : $variable["event_place"]
         * atribut name di html : event_place
         */
        "event_place" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Nama acara
         * cara akses data : $variable["event_name"]
         * atribut name di html : event_name
         */
        "event_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
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
