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
                 * @param string
                 * ? Isi surat paragraf kedua
                 * cara akses data : $variable["contents"]["second"]
                 * atribut name di html : contents[second]
                 * cara akses old dan error : contents.second
                 */
                "second" => [
                    "validate" => "nullable|string|min:10",
                    "cast" => "string",
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
                ],
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
            "first" => "Terima kasih atas surat Bapak/Ibu yang telah kami terima pada [tanggal surat diterima]. Kami menghargai kesempatan untuk merespons dan memberikan tanggapan terhadap permohonan atau komunikasi yang Bapak/Ibu sampaikan.",
            "second" => "[Kemudian sampaikan tanggapan atau respon Bapak/Ibu terhadap permohonan atau komunikasi yang diterima. Jika ada pertanyaan atau permintaan yang diajukan, pastikan untuk memberikan jawaban atau tanggapan yang relevan.]",
            "third" => "Demikianlah Surat Balasan ini kami sampaikan. Terima kasih atas perhatian dan waktu Bapak/Ibu dalam menghubungi kami. Kami senang dapat membantu Bapak/Ibu dan berharap dapat terus menjalin kerjasama yang baik di masa mendatang.",
        ],
    ],
];
