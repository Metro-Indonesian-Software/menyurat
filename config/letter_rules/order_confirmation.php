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
            "cast" => "string"
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
         * @param string
         * ? Nomor pesanan
         * cara akses data : $variable["order_number"]
         * atribut name di html : order_number
         */
        "order_number" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],

        /**
         * @param date
         * ? Tanggal pesanan
         * cara akses data : $variable["order_date"]
         * atribut name di html : order_date
         */
        "order_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],

        /**
         * @param array
         * ? Detail pesanan
         * cara akses data : lakukan foreach dari data $variable["order_details"]
         */
        "order_details" => [
            "validate" => "nullable|array",
            "cast" => "array",
            "items" => [
                /**
                 * @param string
                 * ? Nama barang
                 * cara akses data : $item["name"]
                 * atribut name di html : order_details[$index]["name"]
                 */
                "name" => [
                    "validate" => "required_with:order_details.*.quantity,order_details.*.price|string|min:3",
                    "cast" => "string",
                ],

                /**
                 * @param integer
                 * ? Jumlah barang
                 * cara akses data : $item["quantity"]
                 * atribut name di html : order_details[$index]["quantity"]
                 */
                "quantity" => [
                    "validate" => "required_with:order_details.*.name,order_details.*.price|integer|min:0",
                    "cast" => "integer",
                ],

                /**
                 * @param integer
                 * ? Harga satuan barang
                 * cara akses data : $item["price"]
                 * atribut name di html : order_details[$index]["price"]
                 */
                "price" => [
                    "validate" => "required_with:order_details.*.name,order_details.*.quantity|integer|min:0",
                    "cast" => "integer",
                ],
            ],
        ],

        /**
         * @param string
         * ? Metode pembayaran
         * cara akses data : $variable["payment_method"]
         * atribut name di html : payment_method
         */
        "payment_method" => [
            "validate" => "nullable|string",
            "cast" => "string",
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
        "order_number" => "Nomor pesanan",
        "order_date" => "Tanggal pesanan",
        "order_details" => "Detail pesanan",
        "payment_method" => "Metode pembayaran",
        "signed_name" => "Nama yang bertanda tangan",
        "signed_position" => "Jabatan yang bertanda tangan",

        // items
        "order_details.*.name" => "Nama barang",
        "order_details.*.quantity" => "Jumlah barang",
        "order_details.*.price" => "Harga satuan barang",
    ],
];
