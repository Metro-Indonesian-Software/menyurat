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
        "contents" => [
            /**
             * array assosiative
             * cara akses data : contents["first"]
             * atribut name di html : contents["first"] atau contents["second"]
             */
            "validate" => "nullable|array",
            "cast" => "object",
            "items" => [
                "first" => [
                    "validate" => "nullable|string|min:10",
                    "cast" => "string",
                ],
                "second" => [
                    "validate" => "nullable|array",
                    "cast" => "array",
                ],
                "third" => [
                    "validate" => "nullable|string|min:10",
                    "cast" => "string",
                ]
            ]
        ],
        "signed_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],
        "signed_position" => [
            "validate" => "string",
            "cast" => "string",
        ],
    ],

    "errorKey" => [
        "attachment" => "Lampiran",
        "subject" => "Perihal",
        "signed_date" => "Tanggal tanda tangan surat",
        "recipient_name" => "Nama penerima surat",
        "recipient_address" => "Alamat penerima surat",
        "contents" => "Isi surat",
        "signed_name" => "Nama yang bertanda tangan",
        "signed_position" => "Jabatan yang bertanda tangan",

        // items
        "contents.first" => "Isi surat paragraf pertama",
        "contents.second" => "Isi surat paragraf kedua",
        "contents.third" => "Isi surat paragraf ketiga",
    ],

    "defaultValue" => [
        "contents" => [
            "first" =>  "Dengan surat ini, kami ingin memberitahukan bahwa [jelaskan informasi yang ingin Anda sampaikan dalam surat ini, misalnya perubahan jadwal, perubahan kebijakan, atau informasi penting lainnya].",
            "second" => [],
            "third" => "Mohon untuk diperhatikan dan dilakukan tindakan yang sesuai dengan informasi yang kami sampaikan di atas. Demikianlah Surat Pemberitahuan ini kami sampaikan, atas perhatian Bapak/Ibu kami ucapkan terima kasih.",
        ],
    ],
];
