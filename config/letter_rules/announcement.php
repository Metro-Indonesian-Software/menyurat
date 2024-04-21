<?php

return [
  "key" => config("central.letter_types.Surat Pemberitahuan")["type"],
  "values" => [
    "number_of_letter" => "string",
    "attachment" => "string",
    "subject" => "string",
    "signed_date" => "date",
    "destination" => "string",
    "description" => "string",
    "additional_info" => "array", // TODO: ini bentukan poin"nya gmana?
    "signed_name" => "string",
    "signed_position" => "string",
  ],
];
