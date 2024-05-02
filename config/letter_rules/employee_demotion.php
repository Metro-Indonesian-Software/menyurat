<?php

return [
    "data" => [
        "considerings" => [
            "validate" => "nullable|array",
            "cast" => "array",
        ],
        "rememberings" => [
            "validate" => "nullable|array",
            "cast" => "array",
        ],
        "decidings" => [
            /**
             * array assosiative
             * cara akses data : decidings["first"]
             * atribut name di html : decidings["first"] atau decidings["first"]
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
            ],
        ],
        "employee_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],
        "position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],
        "salary" => [
            "validate" => "nullable|integer",
            "cast" => "integer",
        ],
        "optionals" => [
            /**
             * array biasa berisikan array assosiative
             * cara akses data : optionals[$index]["key"]
             * atribut name di html : optionals[]["key"] atau optionals[$index]["key"]
             */
            "validate" => "nullable|array",
            "cast" => "array",
            "items" => [
                "key" => [
                    "validate" => "required_with:optionals.*.value|string|min:3",
                    "cast" => "string",
                ],
                "value" => [
                    "validate" => "required_with:optionals.*.key|string|min:3",
                    "cast" => "string",
                ],
            ],
        ],
        "new_position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],
        "new_salary" => [
            "validate" => "nullable|integer",
            "cast" => "integer",
        ],
        "new_optionals" => [
            /**
             * array biasa berisikan array assosiative
             * cara akses data : new_optionals[$index]["key"]
             * atribut name di html : new_optionals[]["key"] atau new_optionals[$index]["key"]
             */
            "validate" => "nullable|array",
            "cast" => "array",
            "items" => [
                "key" => [
                    "validate" => "required_with:new_optionals.*.value|string|min:3",
                    "cast" => "string",
                ],
                "value" => [
                    "validate" => "required_with:new_optionals.*.key|string|min:3",
                    "cast" => "string",
                ],
            ],
        ],
        "signed_place" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],
        "signed_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
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
        "considerings" => "Menimbang",
        "rememberings" => "Mengingat",
        "decidings" => "Memutuskan",
        "employee_name" => "Nama karyawan",
        "position" => "Jabatan karyawan",
        "salary" => "Gaji pokok karyawan",
        "optionals" => "Data tambahan",
        "new_position" => "Jabatan baru",
        "new_salary" => "Gaji pokok baru",
        "new_optionals" => "Data baru tambahan",
        "signed_place" => "Tempat tanda tangan surat",
        "signed_date" => "Tanggal tanda tangan surat",
        "signed_name" => "Nama yang bertanda tangan",
        "signed_position" => "Jabatan yang bertanda tangan",

        // items
        "decidings.first" => "Memutuskan poin pertama",
        "decidings.second" => "Memutuskan poin kedua",
        "optionals.*.key" => "Kata kunci",
        "optionals.*.value" => "Data tambahan",
        "new_optionals.*.key" => "Kata kunci",
        "new_optionals.*.value" => "Data tambahan",
    ],

    "defaultValue" => [
        "considerings" => [
            "Bahwa [Nama Perusahaan] telah melakukan evaluasi kinerja rutin terhadap karyawan-karyawan yang bekerja dengan dedikasi dan komitmen tinggi dalam menjalankan tugas dan tanggung jawab mereka.",
            "Bahwa hasil evaluasi menunjukkan adanya ketidaksesuaian antara kinerja dan tanggung jawab yang diemban oleh [Nama Karyawan] dengan jabatan saat ini.",
            "Bahwa penyesuaian perlu dilakukan untuk mencapai tingkat efisiensi dan kinerja yang optimal dalam struktur organisasi perusahaan."
        ],
        "rememberings" => [
            "Kinerja dan kontribusi yang telah ditunjukkan oleh [Nama Karyawan] selama masa kerjanya di perusahaan.",
            "Evaluasi kinerja yang menunjukkan adanya ketidaksesuaian antara kinerja dan tanggung jawab yang diemban oleh [Nama Karyawan] dengan jabatan saat ini.",
        ],
        "decidings" => [
            "first" => "Melakukan perubahan Jabatan Karyawan sebagaimana dimaksud dalam diktum pertama Surat Keputusan ini, maka Gaji Pokok Karyawan juga mengalami perubahaan sebagaimana berikut:",
            "second" => "Surat Keputusan ini berlaku pada tanggal ditetapkan dan apabila di kemudian hari terdapat kekeliruan dan/atau kesalahan atas Surat Keputusan ini, maka akan dilakukan perubahan atau perbaikan seperlunya.",
        ],
    ],
];
