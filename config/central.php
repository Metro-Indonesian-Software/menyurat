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
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.mutasi.index",
    ],
    "Surat Promosi Karyawan" => [
        "type" => "employee_promotion",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.promosi_karyawan.index",
    ],
    "Surat Demosi Karyawan" => [
        "type" => "employee_demotion",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.demosi.index",
    ],
    "Surat Perjanjian PKWT" => [
        "type" => "pkwt_agreement",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.surat_lamaran",
    ],
    "Surat Perjanjian PKWTT" => [
        "type" => "pkwtt_agreement",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.surat_lamaran",
    ],
    "Surat Penawaran Layanan" => [
        "type" => "service_offering",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.penawaran_layanan.index",
    ],
    // "Surat Pengunduran Diri" => [
    //     "type" => "resign",
    //     "image" => "assets/img/surat.jpg",
    //     "view" => "user.buat_surat.surat_lamaran",
    // ],
    "Surat Peringatan" => [
        "type" => "warning",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.peringatan.index",
    ],
    // "Surat Invoice" => "invoice", // TODO: kira-kira apa aja ya datanya?
    "Surat Pemberitahuan" => [
        "type" => "announcement",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.pemberitahuan.index",
    ],
    "Surat Balasan"=> [
        "type" => "response",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.balasan.index",
    ],
    // "Surat Penawaran Harga" => "quotation", // TODO: tunggu invoice dulu deh
    // "Surat Konfirmasi Pesanan" => "order_confirmation", // TODO: tunggu invoice dulu
    "Surat Undangan" => [
        "type" => "invitation",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.undangan.index",
    ],
    "Surat Permohonan" => [
        "type" => "application",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.permohonan.index",
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
