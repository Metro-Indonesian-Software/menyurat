<?php

return [
    "data" => [
        "first_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],
        "first_position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],
        "first_address" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],
        "second_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],
        "second_place_of_birth" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],
        "second_date_of_birth" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],
        "second_address" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],
        "sections" => [
            /**
             * array biasa berisikan array assosiative
             * cara akses data : sections[$index]["key"]
             * atribut name di html : sections[]["title"] atau sections[$index]["title"]
             */
            "validate" => "nullable|array",
            "cast" => "array",
            "items" => [
                "title" => [
                    "validate" => "required_with:sections.*.contents|string|min:3",
                    "cast" => "string"
                ],
                "contents" => [
                    "validate" => "required_with:sections.*.title|string",
                    "cast" => "string",
                ],
            ]
        ],
        "signed_place" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],
        "signed_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],
    ],

    "errorKey" => [
        "first_name" => "Nama pihak pertama",
        "first_position" => "Jabatan pihak pertama",
        "first_address" => "Alamat pihak pertama",
        "second_name" => "Nama pihak kedua",
        "second_place_of_birth" => "Tempat lahir pihak kedua",
        "second_date_of_birth" => "Tanggal lahir pihak kedua",
        "second_address" => "Alamat pihak kedua",
        "effective_date" => "Tanggal berlaku",
        "sections" => "Pasal",
        "signed_place" => "Tempat tanda tangan surat",
        "signed_date" => "Tanggal tanda tangan surat",

        // detail
        "sections.*.title" => "Judul pasal",
        "sections.*.contents" => "Isi pasal",
    ],

    "defaultValue" => [
        "sections" => [
            [
                "title" => "Waktu Perjanjian",
                "contents" => [
                    "<p>Perjanjian Kerja ini dibuat terhitung mulai tanggal &hellip;&hellip; s/d tanggal &hellip;&hellip;&hellip;&hellip;</p>",
                ],
            ],
            [
                "title" => "Tugas dan Penempatan",
                "contents" => [
                    "<ol><li>Pihak Pertama mempekerjakan Pihak Kedua sebagai &hellip;&hellip;&hellip;&hellip;..</li><li>Dengan tugas &ndash; tugas yang akan ditentukan oleh Kepala Bagian sesuai dengan kebutuhan yang diperlukan.</li><li>Pihak Kedua bersedia dipindahtugaskan dan bersedia untuk kerja malam hari bilamana diperlukan perusahaan (kerja shift).</li><li>Pihak Kedua akan melaksanakan tugas pekerjaannya dengan sebaik-baiknya serta mematuhi petunjuk-petunjuk atasannya.</li></ol>",
                ],
            ],
            [
                "title" => "Penggajian",
                "contents" => [
                    "<p>Pihak Pertama memberikan gaji kepada Pihak Kedua sebesar Rp. &hellip;&hellip;&hellip; dan akan diadakan peninjauan berdasarkan prestasi kerja</p>",
                ],
            ],
            [
                "title" => "Pengupahan",
                "contents" => [
                    "<p>Untuk pekerjaan yang dilakukan oleh pihak kedua, Pihak Pertama memberikan upah sebesar Rp. &hellip;&hellip;..</p>",
                ],
            ],
            [
                "title" => "Pembayaran Upah",
                "contents" => [
                    "<p>Dalam pembayaran upah bagaimana diamaksud dalam Pasal 4 Pihak Pertama akan memberikan pada Pihak kedua setiap tanggal 30 atau akhir bulan pada bulan yang bersangkutan, apabila tanggal tersebut jatuh pada hari libur untuk Pihak Kedua, maka akan dibayar pada hari sebelumnya.</p>",
                ],
            ],
            [
                "title" => "Waktu Kerja dan Istirahat",
                "contents" => [
                    "<p>Selama bekerja pada Pihak Pertama, Pihak Kedua dipekerjakan untuk waktu 8 Jam sehari dan 40 jam seminggu adalah sebagai berikut :</p><ul><li>Hari Kerja &nbsp; :</li><li>Jam Kerja &nbsp; :</li></ul>",
                ],
            ],
            [
                "title" => "Tata Tertib",
                "contents" => [
                    '<p>Dalam melaksanakan tugas sehari-hari Pihak Kedua wajib melaksanakan dengan sebaik-baiknya dengan penuh tanggung jawab serta memperhatikan petunjuk pimpinan atau sesuai dengan ketentuan yang ada dalam perusahaan, sebagai berikut :</p><ol style="list-style-type: lower-alpha;"><li>Pihak Kedua wajib menjaga harta milik Pihak Pertama, nama baik dan dengan penuh tanggung jawab;</li><li>Dapat menyimpan rahasia perusahaan;</li><li>Harus menghindarkan diri dalam perbuatan pemborosan dan tindakan-tindakan lain yang merugikan perusahaan;</li><li>Dilarang memanfaatkan jabatan/pekerjaan untuk memanipulasi pembayaran, melaksanakan pekerjaan diluar kepentingan perusahaan untuk kepentingan pribadi;</li><li>Wajib mentaati tata tertib lainnya sesuai dengan operasional perusahaan yang berlaku, dan ketentuan-ketentuan lain yang dikeluarkan oleh Pimpinan Perusahaan.</li></ol>',
                ],
            ],
            [
                "title" => "Memelihara Inventaris",
                "contents" => [
                    "<ol><li>Pihak Kedua wajib memelihara dan menggunakannya dengan penuh tanggung jawab atas alat-alat kerja serta inventaris yang dikenakan oleh perusahaan.</li><li>Dalam menggunakan alat-alat kerja, Pihak Kedua harus mengindahkan petunjuk-petunjuk yang diarahkan oleh pimpinan perusahaan.</li><li>Apabila selesai Perjanjian Kerja ini dan tidak di perpanjang, atau terjadi pemutusan hubungan kerja sebelum berakhir Perjanjian Kerja, Pihak Kedua wajib mengembalikan semua alat-alat kerja/inventaris dalam keadaan &nbsp;baik dan terpelihara.</li></ol>",
                ],
            ],
            [
                "title" => "Kesehatan dan Keselamatan Kerja",
                "contents" => [
                    "<ol><li>Dalam melaksanakan tugas pekerjaannya, Pihak Kedua wajib menjaga dan memelihara kesehatan / keselamatan diri, teman-teman kerja serta perusahaan.</li><li>Pihak Kedua wajib melaporkan kepada pimpinan dalam terjadinya kecelakaan kerja maupun adanya hak-hak yang dapat mengakibatkan kecelakaan kerja.</li></ol>",
                ],
            ],
            [
                "title" => "Mangkir",
                "contents" => [
                    "<ol><li>Dalam hal Pihak Kedua tidak masuk bekerja tanpa alasan yang sah atau hal-hal yang tidak dapat diterima alasannya oleh Pihak Pertama, maka dianggap mangkir (tidak masuk kerja)</li><li>Selama mangkir tersebut pada ayat (1), upah tidak dibayar.</li></ol>",
                ],
            ],
            [
                "title" => "Cuti Tahunan",
                "contents" => [
                    "<ol><li>Dalam hal karyawan telah memiliki masa kerja selama 12 bulan berturut-turut tanpa terputus, maka mendapatkan cuti tahunan selama 12 hari kerja.</li><li>Untuk memperlancar operasional perusahaan maka pelaksanaan cuti tersebut disepakati untuk diatur oleh Pihak Pertama.</li></ol>",
                ],
            ],
            [
                "title" => "Sakit dan Bantuan Kesehatan",
                "contents" => [
                    "<ol><li>Karyawan yang tidak masuk kerja karena sakit, maka harus melampirkan Surat Keterangan dokter. Apabila tidak melampirkan Surat Keterangan Dokter, maka dianggap mangkir.</li><li>Untuk menjaga agar kesehatan Pihak Kedua tetap sehat, maka Pihak Pertama akan memberikan fasilitas kesehatan kepada Pihak Kedua, sesuai dengan kebutuhan pekerja yang bersangkutan dan kemampuan perusahaan yaitu dilakukan di poliklinik yang disediakan atau Puskesmas terdekat dengan memperhatikan peraturan yang berlaku.</li></ol>",
                ],
            ],
            [
                "title" => "Berakhirnya Perjanjian Kerja",
                "contents" => [
                    "<p>Perjanjian Kerja ini sesuai yang disepakati akan berakhir pada tanggal&hellip;&hellip; bulan &hellip;&hellip; tahun &hellip;&hellip;. Dengan berakhirnya Perjanjian Kerja tersebut maka segala hak dan kewajiban akan berakhir pada tanggal dan hari berakhirnya Perjanjian Kerja ini.</p>",
                ],
            ],
            [
                "title" => "Perpanjangan Perjanjian Kerja",
                "contents" => [
                    "<ol><li>Bilamana Pihak Pertama akan memperpanjang Perjanjian Kerja yang disetujui oleh Pihak Kedua, maka Pihak Pertama harus memberitahukan kepada Pihak Kedua paling lambat 7 (tujuh) hari sebelum Perjanjian Kerja ini berakhir dan dengan kesepakatan kedua belah pihak dibuatkan perpanjangan Perjanjian Kerja.</li><li>Dalam hal Perjanjian Kerja ini tidak diperpanjang maka sesuai kesepakatan antara Pihak Pertama dan Pihak Kedua, maka Perjanjian Kerja ini akan putus demi hukum pada tanggal yang telah disepakati, sehingga kedua belah pihak berakhir dengan sendirinya.</li></ol>",
                ],
            ],
            [
                "title" => "Kebersihan dan Kerapihan",
                "contents" => [
                    "<p>Setiap Pekerja wajib menjaga dan memelihara kebersihan dan kerapihan tempat kerja dan mematuhi Tata Tertib dan Aturan Kedisiplinan Perusahaan.</p>",
                ],
            ],
            [
                "title" => "Penutup",
                "contents" => [
                    "<ol><li>Pihak Pertama akan memberikan Surat Peringatan (SP I / II / III) dengan terlebih dahulu melihat jenis dan tingkat pelanggaran terhadap Pihak Kedua yang melakukan pelanggaran dan/atau kesalahan sebelum menjatuhkan sanksi Pengakhiran Hubungan Kerja dengan mengindahkan peraturan perundang-undangan yang berlaku.</li><li>Pihak Pertama dapat memberikan sanksi Pengakhiran Hubungan Kerja kepada Pihak Kedua tanpa peringatan terlebih dahulu apabila terbukti Pihak Kedua telah melakukan kesalahan berat dan/atau membahayakan perusahaan sebagaimana dimaksud dalam Undang-undang dan peraturan Ketenagakerjaan yang berlaku.</li></ol>",
                ],
            ],
        ],
    ],
];
