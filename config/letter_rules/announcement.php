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
         * @param object
         * ? Isi surat
         */
        "contents" => [
            "validate" => "nullable|array",
            "cast" => "object",
            "items" => [
                /**
                 * @param string
                 * ? Isi surat paragraf pertama
                 * cara akses data : $variable["contents"]["first"]
                 * atribut name di html : contents[first]
                 * cara akses old dan error : contents.first
                 */
                "first" => [
                    "validate" => "nullable|string|min:10",
                    "cast" => "string",
                ],

                /**
                 * @param array
                 * ? Isi surat paragraf kedua
                 * cara akses data : lakukan foreach dari data $variable["contents"]["second"]
                 * atribut name di html : contents[second][]
                 * cara akses old dan error : contents.second
                 */
                "second" => [
                    "validate" => "nullable|array",
                    "cast" => "array",
                ],

                /**
                 * @param string
                 * ? Isi surat paragraf ketiga
                 * cara akses data : $variable["contents"]["third"]
                 * atribut name di html : contents[third]
                 * cara akses old dan error : contents.third
                 */
                "third" => [
                    "validate" => "nullable|string|min:10",
                    "cast" => "string",
                ]
            ]
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
