<?php

return [
    "data" => [
        "recipient_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],
        "recipient_address" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],
        "recipient_phone" => [
            "validate" => "nullable|string|regex:/[0]{1}[8]{1}[0-9]{0,11}/",
            "cast" => "string",
        ],
        "invoice_number" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],
        "invoice_due" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],
        "due_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],
        "invoice_details" => [
            /**
             * array biasa berisikan array assosiative
             * cara akses data : invoice_detail[$index]["name"]
             * atribut name di html : invoice_detail[]["name"] atau invoice_detail[$index]["name"]
             */
            "validate" => "nullable|array",
            "cast" => "array",
            "items" => [
                "name" => [
                    "validate" => "required_with:invoice_details.*.quantity,invoice_details.*.price|string",
                    "cast" => "string",
                ],
                "quantity" => [
                    "validate" => "required_with:invoice_details.*.name,invoice_details.*.price|integer",
                    "cast" => "integer",
                ],
                "price" => [
                    // harga satuan
                    "validate" => "required_with:invoice_details.*.name,invoice_details.*.quantity|integer",
                    "cast" => "integer",
                ],
            ],
        ],
        "payment_method" => [
            /**
             * array assosiative
             * cara akses data : discount[percentage]
             * atribut name di html : discount[percentage] atau discount[nominal]
             */
            "validate" => "nullable|array",
            "cast" => "object",
            "items" => [
                "account_number" => [
                    "validate" => "required_with:payment_method.account_name,payment_method.payment_name|integer",
                    "cast" => "integer",
                ],
                "account_name" => [
                    "validate" => "required_with:payment_method.account_number,payment_method.payment_name|string",
                    "cast" => "string",
                ],
                "payment_name" => [
                    "validate" => "required_with:payment_method.account_number,payment_method.account_name|string",
                    "cast" => "string",
                ],
            ],
        ],
        "discount" => [
            /**
             * array assosiative
             * cara akses data : discount[percentage]
             * atribut name di html : discount[percentage] atau discount[nominal]
             */
            "validate" => "nullable|array",
            "cast" => "object",
            "items" => [
                "percentage" => [
                    "validate" => "required_without_all:discount.nominal|prohibits:discount.nominal|decimal:2",
                    "cast" => "double",
                ],
                "nominal" => [
                    "validate" => "required_without_all:discount.percentage|prohibits:discount.percentage|integer",
                    "cast" => "integer",
                ],
            ],
        ],
        "tax" => [
            /**
             * array assosiative
             * cara akses data : tax[percentage]
             * atribut name di html : tax[percentage] atau tax[nominal]
             */
            "validate" => "nullable|array",
            "cast" => "object",
            "items" => [
                "percentage" => [
                    "validate" => "required_without_all:tax.nominal|prohibits:tax.nominal|decimal:2",
                    "cast" => "double",
                ],
                "nominal" => [
                    "validate" => "required_without_all:tax.percentage|prohibits:tax.percentage|integer",
                    "cast" => "integer",
                ],
            ],
        ],
        "shipping" => [
            "validate" => "nullable|integer",
            "cast" => "integer",
        ],
        "dp" => [
            "validate" => "nullable|integer",
            "cast" => "integer",
        ],
    ],

    "errorKey" => [
        "recipient_name" => "Nama penerima invoice",
        "recipient_address" => "Alamat penerima invoice",
        "recipient_phone" => "Nomor telpon penerima invoice",
        "invoice_number" => "Nomor invoice",
        "invoice_due" => "Jatuh tempo invoice",
        "due_date" => "Tenggat waktu",
        "invoice_details" => "Detail pesanan",
        "payment_method" => "Metode pembayaran",
        "discount" => "Diskon",
        "tax" => "Pajak",
        "shipping" => "Biaya pengiriman",
        "dp" => "Pembayaran dimuka",

        // items
        "invoice_details.*.name" => "Nama barang",
        "invoice_details.*.quantity" => "Jumlah barang",
        "invoice_details.*.price" => "Harga barang (satuan)",
        "payment_method.account_number" => "Nomor akun",
        "payment_method.account_name" => "Nama pemilik akun",
        "payment_method.payment_name" => "Metode pembayaran",
        "discount.percentage" => "Persentase diskon",
        "discount.nominal" => "Nominal diskon",
        "tax.percentage" => "Persentase pajak",
        "tax.nominal" => "Nominal pajak",
    ],
];
