<?php

return [
  "key" => config("central.letter_types.Surat Promosi Karyawan"),
  "values" => [
    "number_of_letter" => "string",
    "purpose" => "string",
    "considerings" => "array",
    "rememberings" => "array",
    "deciding" => [
      "first" => "string",
      "second" => "string",
    ],
    "employee_name" => "string",
    "position" => "string",
    "salary" => "integer",
    "new_position" => "string",
    "new_salary" => "integer",
    // "optionals" => "array", // TODO: masih bingung
    "signed_place" => "string",
    "signed_date" => "date",
    "signed_name" => "string",
    "signed_position" => "string",
  ],
];