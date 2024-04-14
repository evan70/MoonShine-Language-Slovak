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

    'accepted' => 'Pole :attribute musí byť akceptované.',
    'accepted_if' => 'Pole :attribute musí byť akceptované, keď :other je :value.',
    'active_url' => 'Pole :attribute nie je platná URL adresa.',
    'after' => 'Pole :attribute musí byť dátum po :date.',
    'after_or_equal' => 'Pole :attribute musí byť dátum po alebo rovný :date.',
    'alpha' => 'Pole :attribute môže obsahovať iba písmená.',
    'alpha_dash' => 'Pole :attribute môže obsahovať iba písmená, čísla, pomlčky a podčiarkovníky.',
    'alpha_num' => 'Pole :attribute môže obsahovať iba písmená a čísla.',
    'array' => 'Pole :attribute musí byť pole.',
    'before' => 'Pole :attribute musí byť dátum pred :date.',
    'before_or_equal' => 'Pole :attribute musí byť dátum pred alebo rovný :date.',
    'between' => [
        'numeric' => 'Pole :attribute musí byť medzi :min a :max.',
        'file' => 'Pole :attribute musí mať medzi :min a :max kilobajtov.',
        'string' => 'Pole :attribute musí mať medzi :min a :max znakov.',
        'array' => 'Pole :attribute musí mať medzi :min a :max položkami.',
    ],
    'boolean' => 'Pole :attribute musí byť true alebo false.',
    'confirmed' => 'Potvrdenie pola :attribute sa nezhoduje.',
    'current_password' => 'Heslo je nesprávne.',
    'date' => 'Pole :attribute nie je platný dátum.',
    'date_equals' => 'Pole :attribute musí byť dátum rovný :date.',
    'date_format' => 'Pole :attribute nezodpovedá formátu :format.',
    'declined' => 'Pole :attribute musí byť odmietnuté.',
    'declined_if' => 'Pole :attribute musí byť odmietnuté, keď :other je :value.',
    'different' => 'Polia :attribute a :other sa musia líšiť.',
    'digits' => 'Pole :attribute musí mať :digits číslic.',
    'digits_between' => 'Pole :attribute musí mať medzi :min a :max číslicami.',
    'dimensions' => 'Obrázok :attribute má neplatné rozmery.',
    'distinct' => 'Pole :attribute má duplicitnú hodnotu.',
    'email' => 'Pole :attribute musí byť platná e-mailová adresa.',
    'ends_with' => 'Pole :attribute musí končiť jednou z týchto hodnôt: :values.',
    'enum' => 'Vybraná hodnota :attribute je neplatná.',
    'exists' => 'Vybraná hodnota :attribute je neplatná.',
    'file' => 'Pole :attribute musí byť súbor.',
    'filled' => 'Pole :attribute musí mať hodnotu.',
    'gt' => [
        'numeric' => 'Pole :attribute musí byť väčšie ako :value.',
        'file' => 'Pole :attribute musí mať viac ako :value kilobajtov.',
        'string' => 'Pole :attribute musí mať viac ako :value znakov.',
        'array' => 'Pole :attribute musí mať viac ako :value položiek.',
    ],
    'gte' => [
        'numeric' => 'Pole :attribute musí byť väčšie alebo rovné :value.',
        'file' => 'Pole :attribute musí mať viac alebo rovnako :value kilobajtov.',
        'string' => 'Pole :attribute musí mať viac alebo rovnako :value znakov.',
        'array' => 'Pole :attribute musí mať :value položiek alebo viac.',
    ],
    'image' => 'Pole :attribute musí byť obrázok.',
    'in' => 'Vybraná hodnota :attribute je neplatná.',
    'in_array' => 'Pole :attribute neexistuje v :other.',
    'integer' => 'Pole :attribute musí byť celé číslo.',
    'ip' => 'Pole :attribute musí byť platná IP adresa.',
    'ipv4' => 'Pole :attribute musí byť platná IPv4 adresa.',
    'ipv6' => 'Pole :attribute musí byť platná IPv6 adresa.',
    'json' => 'Pole :attribute musí byť platný JSON reťazec.',
    'lt' => [
        'numeric' => 'Pole :attribute musí byť menšie ako :value.',
        'file' => 'Pole :attribute musí mať menej ako :value kilobajtov.',
        'string' => 'Pole :attribute musí mať menej ako :value znakov.',
        'array' => 'Pole :attribute musí mať menej ako :value položiek.',
    ],
    'lte' => [
        'numeric' => 'Pole :attribute musí byť menšie alebo rovné :value.',
        'file' => 'Pole :attribute musí mať menej alebo rovnako :value kilobajtov.',
        'string' => 'Pole :attribute musí mať menej alebo rovnako :value znakov.',
        'array' => 'Pole :attribute nesmie mať viac ako :value položiek.',
    ],
    'mac_address' => 'Pole :attribute musí byť platná MAC adresa.',
    'max' => [
        'numeric' => 'Pole :attribute nesmie byť väčšie ako :max.',
        'file' => 'Pole :attribute nesmie mať viac ako :max kilobajtov.',
        'string' => 'Pole :attribute nesmie mať viac ako :max znakov.',
        'array' => 'Pole :attribute nesmie mať viac ako :max položiek.',
    ],
    'mimes' => 'Pole :attribute musí byť súbor typu: :values.',
    'mimetypes' => 'Pole :attribute musí byť súbor typu: :values.',
    'min' => [
        'numeric' => 'Pole :attribute musí mať aspoň :min.',
        'file' => 'Pole :attribute musí mať aspoň :min kilobajtov.',
        'string' => 'Pole :attribute musí mať aspoň :min znakov.',
        'array' => 'Pole :attribute musí mať aspoň :min položiek.',
    ],
    'multiple_of' => 'Pole :attribute musí byť násobok :value.',
    'not_in' => 'Vybraná hodnota :attribute je neplatná.',
    'not_regex' => 'Formát :attribute je neplatný.',
    'numeric' => 'Pole :attribute musí byť číslo.',
    'password' => 'Heslo je nesprávne.',
    'present' => 'Pole :attribute musí byť prítomné.',
    'prohibited' => 'Pole :attribute je zakázané.',
    'prohibited_if' => 'Pole :attribute je zakázané, keď :other je :value.',
    'prohibited_unless' => 'Pole :attribute je zakázané, pokiaľ :other nie je :values.',
    'prohibits' => 'Pole :attribute zakazuje :other.',
    'regex' => 'Formát :attribute je neplatný.',
    'required' => 'Pole :attribute je povinné.',
    'required_array_keys' => 'Pole :attribute musí obsahovať záznamy pre: :values.',
    'required_if' => 'Pole :attribute je povinné, keď :other je :value.',
    'required_unless' => 'Pole :attribute je povinné, pokiaľ :other nie je v :values.',
    'required_with' => 'Pole :attribute je povinné, keď :values je prítomné.',
    'required_with_all' => 'Pole :attribute je povinné, keď :values sú prítomné.',
    'required_without' => 'Pole :attribute je povinné, keď :values nie je prítomné.',
    'required_without_all' => 'Pole :attribute je povinné, keď nie je prítomné žiadne z :values.',
    'same' => 'Polia :attribute a :other sa musia zhodovať.',
    'size' => [
        'numeric' => 'Pole :attribute musí byť :size.',
        'file' => 'Pole :attribute musí mať :size kilobajtov.',
        'string' => 'Pole :attribute musí mať :size znakov.',
        'array' => 'Pole :attribute musí obsahovať :size položiek.',
    ],
    'starts_with' => 'Pole :attribute musí začínať jednou z týchto hodnôt: :values.',
    'string' => 'Pole :attribute musí byť reťazec.',
    'timezone' => 'Pole :attribute musí byť platná časová zóna.',
    'unique' => 'Pole :attribute je už obsadené.',
    'uploaded' => 'Pole :attribute sa nepodarilo nahrať.',
    'url' => 'Formát :attribute je neplatný.',
    'uuid' => 'Pole :attribute musí byť platný UUID.',

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
