<?php

return [
    "data" => [
        /**
         * @param array
         * ? Menimbang
         * cara akses data : lakukan foreach dari data $variable["considerings"]
         * atribut name di html : considerings[]
         * cara akses old dan error : considerings
         */
        "considerings" => [
            "validate" => "nullable|array",
            "cast" => "array",
        ],

        /**
         * @param array
         * ? Mengingat
         * cara akses data : lakukan foreach dari data $variable["rememberings"]
         * atribut name di html : rememberings[]
         * cara akses old dan error : rememberings
         */
        "rememberings" => [
            "validate" => "nullable|array",
            "cast" => "array",
        ],

        /**
         * @param object
         * ? Memutuskan
         */
        "decidings" => [
            "validate" => "nullable|array",
            "cast" => "object",
            "items" => [
                /**
                 * @param string
                 * ? Memutuskan paragraf pertama
                 * cara akses data : $variable["decidings"]["first"]
                 * atribut name di html : decidings[first]
                 * cara akses old dan error : decidings.first
                 */
                "first" => [
                    "validate" => "nullable|string|min:10",
                    "cast" => "string",
                ],

                /**
                 * @param string
                 * ? Memutuskan paragraf kedua
                 * cara akses data : $variable["decidings"]["second"]
                 * atribut name di html : decidings[second]
                 * cara akses old dan error : decidings.second
                 */
                "second" => [
                    "validate" => "nullable|string|min:10",
                    "cast" => "string",
                ],
            ],
        ],

        /**
         * @param string
         * ? Nama karyawan
         * cara akses data : $variable["employee_name"]
         * atribut name di html : employee_name
         */
        "employee_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Jabatan karyawan (semula)
         * cara akses data : $variable["position"]
         * atribut name di html : position
         */
        "position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],

        /**
         * @param integer
         * ? Gaji pokok karyawan (semula)
         * cara akses data : $variable["salary"]
         * atribut name di html : salary
         */
        "salary" => [
            "validate" => "nullable|integer|min:0",
            "cast" => "integer",
        ],

        /**
         * @param array
         * ? Data tambahan (semula)
         * cara akses data : lakukan foreach dari data $variable["optionals"]
         */
        "optionals" => [
            "validate" => "nullable|array",
            "cast" => "array",
            "items" => [
                /**
                 * @param string
                 * ? Kata kunci dari data tambahan
                 * cara akses data : $item["key"]
                 * atribut name di html : optionals[$index][key]
                 * cara akses old dan error : optionals.$index.key
                 */
                "key" => [
                    "validate" => "required|string|min:3",
                    "cast" => "string",
                ],

                /**
                 * @param string
                 * ? Nilai dari data tambahan
                 * cara akses data : $item["value"]
                 * atribut name di html : optionals[$index][value]
                 * cara akses old dan error : optionals.$index.value
                 */
                "value" => [
                    "validate" => "required|string|min:3",
                    "cast" => "string",
                ],
            ],
        ],

        /**
         * @param string
         * ? Jabatan baru
         * cara akses data : $variable["new_position"]
         * atribut name di html : new_position
         */
        "new_position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],

        /**
         * @param integer
         * ? Gaji pokok baru
         * cara akses data : $variable["new_salary"]
         * atribut name di html : new_salary
         */
        "new_salary" => [
            "validate" => "nullable|integer|min:0",
            "cast" => "integer",
        ],

        /**
         * @param array
         * ? Data tambahan (baru)
         * cara akses data : lakukan foreach dari data $variable["new_optionals"]
         */
        "new_optionals" => [
            "validate" => "nullable|array",
            "cast" => "array",
            "items" => [
                /**
                 * @param string
                 * ? Kata kunci dari data tambahan
                 * cara akses data : $item["key"]
                 * atribut name di html : new_optionals[$index][key]
                 * cara akses old dan error : new_optionals.$index.key
                 */
                "key" => [
                    "validate" => "required|string|min:3",
                    "cast" => "string",
                ],

                /**
                 * @param string
                 * ? Nilai dari data tambahan
                 * cara akses data : $item["value"]
                 * atribut name di html : new_optionals[$index][value]
                 * cara akses old dan error : new_optionals.$index.value
                 */
                "value" => [
                    "validate" => "required|string|min:3",
                    "cast" => "string",
                ],
            ],
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
            "Bahwa hasil evaluasi menunjukkan bahwa saudara telah menunjukkan kinerja yang luar biasa dan kontribusi yang signifikan dalam mencapai tujuan perusahaan.",
            "Bahwa saudara telah menunjukkan kemampuan kepemimpinan, integritas, dan dedikasi yang sesuai dengan jabatan yang lebih tinggi di perusahaan."
        ],
        "rememberings" => [
            "Kinerja yang luar biasa dan kontribusi yang signifikan yang telah ditunjukkan oleh saudara selama masa kerjanya di perusahaan.",
            "Kemampuan dan kualifikasi yang dimiliki oleh saudara dalam mengemban tanggung jawab yang lebih besar dan kompleks.",
        ],
        "decidings" => [
            "first" => "Melakukan perubahan Jabatan saudara sebagaimana dimaksud dalam diktum pertama Surat Keputusan ini, maka Gaji Pokok juga mengalami perubahaan sebagaimana berikut:",
            "second" => "Surat Keputusan ini berlaku pada tanggal ditetapkan dan apabila di kemudian hari terdapat kekeliruan dan/atau kesalahan atas Surat Keputusan ini, maka akan dilakukan perubahan atau perbaikan seperlunya.",
        ],
    ],
];
