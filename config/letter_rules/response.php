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
                    "validate" => "nullable|string|min:10",
                    "cast" => "string",
                ],
                "third" => [
                    "validate" => "nullable|string|min:10",
                    "cast" => "string",
                ],
            ]
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
