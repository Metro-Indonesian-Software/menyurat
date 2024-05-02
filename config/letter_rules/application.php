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
                ],
                "fourth" => [
                    "validate" => "nullable|string|min:10",
                    "cast" => "string",
                ],
            ],
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
        "contents.fourth" => "Isi surat paragraf penutup",
    ],

    "defaultValue" => [
        "contents" => [
            "first" => "Sehubungan dengan [alasan pemohonan], [Nama/Instansi Anda], bermaksud untuk mengajukan permohonan kepada Bapak/Ibu dengan harapan agar dapat dipertimbangkan dengan baik. Permohonan kami adalah sebagai berikut:",
            "second" => [],
            "third" => "Kami menyadari bahwa permohonan ini memerlukan pertimbangan dan evaluasi lebih lanjut. Namun, kami sangat menghargai waktu dan perhatian yang diberikan dalam menanggapi permohonan ini.	 Apabila diperlukan, saya siap untuk memberikan informasi tambahan atau melakukan langkah-langkah lanjutan yang diperlukan untuk mendukung permohonan ini.",
            "fourth" => "Demikianlah Surat Permohonan ini kami sampaikan, atas perhatian Bapak/Ibu kami ucapkan terima kasih.",
        ],
    ],
];
