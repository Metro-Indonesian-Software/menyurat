<?php

return [
  "system_roles" => [
    "administrator" => "admin",
    "user" => "user",
  ],

  "system_permissions" => [
    "users_manage",
    "letter_manage",
    "letter_access",
  ],

  "paths" => [
    "company_logo" => "images/logo",
  ],

  // letter type and letter rules name of each type
  "letter_types" => [
    "Surat Mutasi Karyawan" => "employee_mutation",
    "Surat Promosi Karyawan" => "employee_promotion",
    "Surat Demosi Karyawan" => "employee_demotion",
    "Surat Perjanjian PKWT" => "pkwt_agreement",
    "Surat Perjanjian PKWTT" => "pkwtt_agreement",
    "Surat Penawaran Layanan" => "service_offering",
    "Surat Pengunduran Diri" => "resign",
    "Surat Peringatan" => "warning",
    // "Surat Invoice" => "invoice", // TODO: kira-kira apa aja ya datanya?
    "Surat Pemberitahuan" => "announcement",
    "Surat Balasan"=> "response",
    // "Surat Penawaran Harga" => "quotation", // TODO: tunggu invoice dulu deh
    // "Surat Konfirmasi Pesanan" => "order_confirmation", // TODO: tunggu invoice dulu
    "Surat Undangan" => "invitation",
    "Surat Permohonan" => "application",
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