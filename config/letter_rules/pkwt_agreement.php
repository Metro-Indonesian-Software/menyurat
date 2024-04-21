<?php

return [
  "key" => config("central.letter_types.Surat Perjanjian PKWT")["type"],
  "values" => [
    "number_of_letter" => "string",
    "first_name" => "string",
    "first_position" => "string",
    "first_address" => "string",
    "second_name" => "string",
    "second_place_of_birth" => "string",
    "second_date_of_birth" => "date",
    "second_address" => "string",
    "effective_date" => "date",
    "section" => [
      "names" => "array",
      "contents" => "array",
    ],
    "signed_place" => "string",
    "signed_date" => "date",
  ],
];
