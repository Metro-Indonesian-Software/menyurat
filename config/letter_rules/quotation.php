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
                     * atribut name di html : contents["second"][$index]["key"]
                     */
                    "validate" => "nullable|array",
                    "cast" => "array",
                    "items" => [
                        "key" => [
                            "validate" => "required_with:contents.second.*.value|string",
                            "cast" => "string",
                        ],
                        "value" => [
                            "validate" => "required_with:contents.second.*.key|string",
                            "cast" => "string",
                        ],
                    ]
                ],
                "third" => [
                    "validate" => "nullable|string|min:10",
                    "cast" => "string",
                ],
                "fourth" => [
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
        "contents.fourth" => "Isi surat paragraf keempat",
        "contents.second.*.key" => "Kata kunci",
        "contents.second.*.value" => "Data tambahan",
    ],

    "defaultValue" => [
        "contents" => [
            "first" => "Kami dari [Nama Perusahaan/Individu Anda] ingin mengajukan permohonan penawaran harga untuk layanan/produk yang Anda tawarkan. Kami tertarik dengan layanan/produk yang Anda miliki dan berharap dapat menerima penawaran harga yang kompetitif.",
            "second" => [
                [
                    "key" => "Deskripsi Layanan/Produk yang Diminta",
                    "value" => "[Jelaskan dengan jelas layanan/produk yang Anda butuhkan]",
                ],
                [
                    "key" => "Spesifikasi yang Diinginkan",
                    "value" => "[Rincian spesifikasi atau fitur-fitur khusus yang Anda harapkan]",
                ],
                [
                    "key" => "Jumlah yang Dibutuhkan",
                    "value" => "[Tentukan jumlah yang Anda perlukan]",
                ],
                [
                    "key" => "Perkiraan Jadwal Pengerjaan/Pengiriman",
                    "value" => "[Tentukan waktu atau periode kapan layanan/produk ini dibutuhkan]",
                ],
                [
                    "key" => "Ketentuan Tambahan",
                    "value" => "[Tambahkan ketentuan tambahan jika ada, misalnya persyaratan pembayaran, garansi, atau hal lain yang relevan]",
                ],
            ],
            "third" => "Sebagai penunjang kelengkapan dari Surat Penawaran Harga ini, maka kami lampirkan data sesuai dengan ketentuan dari [Perusahaan Penyedia Produk/Jasa] serta data-data pendukung yang dapat melengkapi penawaran kami yang tidak terpisahkan dari surat ini.",
            "fourth" => "Demikianlah Surat Penawaran harga  ini kami sampaikan, atas perhatian Bapak/Ibu kami ucapkan terima kasih.",
        ],
    ],
];
