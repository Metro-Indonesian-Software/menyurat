<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'date' => ':attribute tidak valid',
    'date_format' => ':attribute harus sesuai format :format.',
    'digits_between' => ':attribute harus berdigit antara :min-:max',
    'email' => ':attribute tidak valid',
    'file' => ':attribute harus bertipe file',
    'image' => ':attribute bukan gambar yang valid',
    'integer' => ':attribute harus bertipe integer',
    'max' => [
        'array' => ':attribute tidak boleh lebih dari :max item',
        'file' => ':attribute tidak boleh lebih dari :max kilobyte',
        'numeric' => ':attribute tidak boleh lebih dari :max.',
        'string' => ':attribute tidak boleh lebih dari :max karakter',
    ],
    'max_digits' => ':attribute tidak boleh lebih dari :max digit',
    'min' => [
        'array' => ':attribute tidak boleh kurang dari :min item',
        'file' => ':attribute tidak boleh kurang dari :min kilobyte',
        'numeric' => ':attribute tidak boleh kurang dari :min',
        'string' => ':attribute tidak boleh kurang dari :min karakter',
    ],
    'min_digits' => ':attribute tidak boleh kurang dari :min digit',
    'password' => [
        'letters' => ':attribute minimal 1 karakter',
        'mixed' => ':attribute minimal 1 huruf kapital and 1 huruf kecil',
        'numbers' => ':attribute minimal 1 angka',
        'symbols' => ':attribute minimal 1 simbol',
        'uncompromised' => ':attribute telah muncul dalam kebocoran data. Silakan pilih :attribute lain',
    ],
    'regex' => ':attribute tidak valid',
    'required' => ':attribute tidak boleh kosong',
    'same' => ':attribute harus sama dengan :other.',
    'size' => [
        'array' => ':attribute harus memiliki :size item',
        'file' => ':attribute harus berukuran :size kilobyte',
        'numeric' => ':attribute harus sama dengan :size.',
        'string' => ':attribute harus memiliki :size karakter',
    ],
    'string' => ':attribute harus bertipe string',
    'unique' => ':attribute telah digunakan',
    'url' => ':attribute tidak valid',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
