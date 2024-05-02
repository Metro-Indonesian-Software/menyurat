<?php

return [
    "data" => [
        "attachment" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],
        "subject" => [
            "validate" => "nullable|string",
            "cast" => "string"
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
                    /**
                     * array biasa berisikan array assosiative
                     * cara akses data : contents["second"][$index]["key"]
                     * atribut name di html : contents[]["key"] atau contents[$index]["key"]
                     */
                    "validate" => "nullable|array",
                    "cast" => "array",
                    "items" => [
                        "key" => [
                            "validate" => "required_with:contents.second.*.value|string|min:3",
                            "cast" => "string",
                        ],
                        "value" => [
                            "validate" => "required_with:contents.second.*.key|string|min:3",
                            "cast" => "string",
                        ],
                    ]
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
        "contents.second.*.key" => "Kata kunci",
        "contents.second.*.value" => "Data tambahan",
    ],

    "defaultValue" => [
        "contents" => [
            "first" => "Kami dari [Nama Perusahaan Anda] bermaksud menawarkan layanan/jasa kami kepada perusahaan Bapak/Ibu. Kami berpengalaman dalam [jelaskan bidang atau jenis layanan/jasa yang Anda tawarkan] dan kami yakin dapat memenuhi kebutuhan dari perusahaan Bapak/Ibu. Berikut ini adalah rangkuman layanan/jasa yang kami tawarkan:",
            "second" => [
                [
                    "key" => "Deskripsi Layanan/Jasa",
                    "value" => "[Tulis deskripsi singkat mengenai layanan/jasa yang ditawarkan, termasuk keunggulan dan manfaatnya]",
                ],
                [
                    "key" => "Keunggulan Kami",
                    "value" => "[Tuliskan mengapa perusahaan Anda unggul dalam menyediakan layanan/jasa ini, seperti pengalaman, keahlian khusus, teknologi terbaru, atau sertifikasi]",
                ],
                [
                    "key" => "Biaya Layanan/Jasa",
                    "value" => "[Tuliskan biaya yang diperlukan untuk layanan/jasa tersebut, bisa berupa biaya bulanan, tahunan, atau biaya proyek]",
                ],
            ],
            "third" => "Demikianlah penawaran layanan/jasa ini kami sampaikan. Kami berharap dapat menjalin kerjasama yang baik dengan perusahaan Bapak/Ibu dan memberikan nilai tambah bagi kesuksesan bersama. Atas perhatiannya kami ucapkan terima kasih.",
        ],
    ],
];
