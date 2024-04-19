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

  "path" => [
    "company_logo" => "images/logo",
  ],

  "letter_type" => [
    "Surat Mutasi Karyawan" => "mutation_employee",
    "Surat Promosi Karyawan" => "employee_promotion",
    "Surat Demosi Karyawan" => "employee_demotion",
    "Surat Perjanjian PKWT" => "pkwt_agreement",
    "Surat Perjanjian PKWTT" => "pkwtt_agreement",
    "Surat Penawaran Layanan" => "service_offering",
    "Surat Pengunduran Diri" => "resign",
    "Surat Peringatan" => "warning",
    "Surat Invoice" => "invoice",
    "Surat Pemberitahuan" => "announcement",
    "Surat Balasan"=> "response",
    "Surat Penawaran Harga" => "quotation",
    "Surat Konfirmasi Pesanan" => "order_confirmation",
    "Surat Undangan" => "invitation",
    "Surat Permohonan" => "application",
  ],
];