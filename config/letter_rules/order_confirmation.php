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
        "order_number" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],
        "order_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],
        "order_details" => [
            /**
             * array biasa berisikan array assosiative
             * cara akses data : order_detail["second"][$index]["key"]
             * atribut name di html : order_detail[]["name"] atau order_detail[$index]["name"]
             */
            "validate" => "nullable|array",
            "cast" => "array",
            "items" => [
                "name" => [
                    "validate" => "required_with:order_details.*.quantity,order_details.*.price|string|min:3",
                    "cast" => "string",
                ],
                "quantity" => [
                    "validate" => "required_with:order_details.*.name,order_details.*.price|integer",
                    "cast" => "integer",
                ],
                "price" => [
                    // harga satuan
                    "validate" => "required_with:order_details.*.name,order_details.*.quantity|integer",
                    "cast" => "integer",
                ],
            ],
        ],
        "payment_method" => [
            "validate" => "nullable|string",
            "cast" => "string",
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
