<?php

return [
    "data" => [
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

        /**
         * @param string
         * ? Nama yang dimutasi
         * cara akses data : $variable["mutated_name"]
         * atribut name di html : mutated_name
         */
        "mutated_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Jabatan yang dimutasi
         * cara akses data : $variable["mutated_position"]
         * atribut name di html : mutated_position
         */
        "mutated_position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Jabatan yang baru
         * cara akses data : $variable["new_position"]
         * atribut name di html : new_position
         */
        "new_position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Lokasi kantor baru
         * cara akses data : $variable["new_office_location"]
         * atribut name di html : new_office_location
         */
        "new_office_location" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],

        /**
         * @param date
         * ? Tanggal berlaku/efektif berlaku
         * cara akses data : $variable["effective_date"]
         * atribut name di html : effective_date
         */
        "effective_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
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
