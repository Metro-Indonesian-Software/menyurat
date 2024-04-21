<?php

return [
  "system_roles" => [
    "administrator" => "admin",
    "user" => "user",
  ],

  "system_permissions" => [
    "users_manage",
    "letters_manage",
    "letters_access",
  ],

  "paths" => [
    "company_logo" => "images/logo",
  ],

  // letter type and letter rules name of each type
  "letter_types" => [
    "Surat Mutasi Karyawan" => [
        "type" => "employee_mutation",
        "image" => asset("assets/img/surat.jpg")
    ],
    "Surat Promosi Karyawan" => [
        "type" => "employee_promotion",
        "image" => asset("assets/img/surat.jpg")
    ],
    "Surat Demosi Karyawan" => [
        "type" => "employee_demotion",
        "image" => asset("assets/img/surat.jpg")
    ],
    "Surat Perjanjian PKWT" => [
        "type" => "pkwt_agreement",
        "image" => asset("assets/img/surat.jpg")
    ],
    "Surat Perjanjian PKWTT" => [
        "type" => "pkwtt_agreement",
        "image" => asset("assets/img/surat.jpg")
    ],
    "Surat Penawaran Layanan" => [
        "type" => "service_offering",
        "image" => asset("assets/img/surat.jpg")
    ],
    "Surat Pengunduran Diri" => [
        "type" => "resign",
        "image" => asset("assets/img/surat.jpg")
    ],
    "Surat Peringatan" => [
        "type" => "warning",
        "image" => asset("assets/img/surat.jpg")
    ],
    // "Surat Invoice" => "invoice", // TODO: kira-kira apa aja ya datanya?
    "Surat Pemberitahuan" => [
        "type" => "announcement",
        "image" => asset("assets/img/surat.jpg")
    ],
    "Surat Balasan"=> [
        "type" => "response",
        "image" => asset("assets/img/surat.jpg")
    ],
    // "Surat Penawaran Harga" => "quotation", // TODO: tunggu invoice dulu deh
    // "Surat Konfirmasi Pesanan" => "order_confirmation", // TODO: tunggu invoice dulu
    "Surat Undangan" => [
        "type" => "invitation",
        "image" => asset("assets/img/surat.jpg")
    ],
    "Surat Permohonan" => [
        "type" => "application",
        "image" => asset("assets/img/surat.jpg")
    ],
  ],

  "days" => [
    "Monday" => "Senin",
    "Tuesday" => "Selasa",
    "Wednesday" => "Rabu",
    "Thursday" => "Kamis",
    "Friday" => "Jumat",
    "Saturday" => "Sabtu",
    "Sunday" => "Minggu",
  ],

  "months" => [
    "January" => "Januari",
    "February" => "Februari",
    "March" => "Maret",
    "April" => "April",
    "May" => "Mei",
    "June" => "Juni",
    "July" => "Juli",
    "August" => "Agustus",
    "September" => "September",
    "October" => "Oktober",
    "November" => "November",
    "December" => "Desember",
  ],
];
