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
        // ? clear
        "rule" => "employee_mutation",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.mutasi.index",
    ],
    "Surat Promosi Karyawan" => [
        // ? clear
        "rule" => "employee_promotion",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.promosi_karyawan.index",
    ],
    "Surat Demosi Karyawan" => [
        // ? clear
        "rule" => "employee_demotion",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.demosi.index",
    ],
    "Surat Perjanjian PKWT" => [
        // ? clear
        "rule" => "pkwt_agreement",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.surat_lamaran",
    ],
    "Surat Perjanjian PKWTT" => [
        // ? clear
        "rule" => "pkwtt_agreement",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.surat_lamaran",
    ],
    "Surat Penawaran Layanan" => [
        // ? clear
        "rule" => "service_offering",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.penawaran_layanan.index",
    ],
    "Surat Peringatan" => [
        // ? clear
        "rule" => "warning",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.peringatan.index",
    ],
    "Surat Invoice" => [
        // ? clear
        "rule" => "invoice",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.surat_lamaran",
    ],
    "Surat Pemberitahuan" => [
        // ? clear
        "rule" => "announcement",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.pemberitahuan.index",
    ],
    "Surat Balasan"=> [
        // ?clear
        "rule" => "response",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.balasan.index",
    ],
    "Surat Penawaran Harga" => [
        // ? clear
        "rule" => "quotation",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.surat_lamaran",
    ],
    "Surat Konfirmasi Pesanan" => [
        // ? clear
        "rule" => "order_confirmation",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.surat_lamaran",
    ],
    "Surat Undangan" => [
        // ? clear
        "rule" => "invitation",
        "image" => "assets/img/surat.jpg",
        "view" => "user.buat_surat.undangan.index",
    ],
    "Surat Permohonan" => [
        // ? clear
        "rule" => "application",
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
