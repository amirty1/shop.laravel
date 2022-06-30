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

    'accepted' => 'The :attributes must be accepted.',
    'accepted_if' => 'The :attributes must be accepted when :other is :value.',
    'active_url' => 'The :attributes is not a valid URL.',
    'after' => 'The :attributes must be a date after :date.',
    'after_or_equal' => 'The :attributes must be a date after or equal to :date.',
    'alpha' => 'The :attributes must only contain letters.',
    'alpha_dash' => 'The :attributes must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attributes must only contain letters and numbers.',
    'array' => 'The :attributes must be an array.',
    'before' => 'The :attributes must be a date before :date.',
    'before_or_equal' => 'The :attributes must be a date before or equal to :date.',
    'between' => [
        'array' => 'The :attributes must have between :min and :max items.',
        'file' => 'The :attributes must be between :min and :max kilobytes.',
        'numeric' => 'The :attributes must be between :min and :max.',
        'string' => 'The :attributes must be between :min and :max characters.',
    ],
    'boolean' => 'The :attributes field must be true or false.',
    'confirmed' => 'The :attributes confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attributes is not a valid date.',
    'date_equals' => 'The :attributes must be a date equal to :date.',
    'date_format' => 'The :attributes does not match the format :format.',
    'declined' => 'The :attributes must be declined.',
    'declined_if' => 'The :attributes must be declined when :other is :value.',
    'different' => 'The :attributes and :other must be different.',
    'digits' => 'The :attributes must be :digits digits.',
    'digits_between' => 'The :attributes must be between :min and :max digits.',
    'dimensions' => 'The :attributes has invalid image dimensions.',
    'distinct' => 'The :attributes field has a duplicate value.',
    'email' => 'The :attributes must be a valid email address.',
    'ends_with' => 'The :attributes must end with one of the following: :values.',
    'enum' => 'The selected :attributes is invalid.',
    'exists' => 'The selected :attributes is invalid.',
    'file' => 'The :attributes must be a file.',
    'filled' => 'The :attributes field must have a value.',
    'gt' => [
        'array' => 'The :attributes must have more than :value items.',
        'file' => 'The :attributes must be greater than :value kilobytes.',
        'numeric' => 'The :attributes must be greater than :value.',
        'string' => 'The :attributes must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attributes must have :value items or more.',
        'file' => 'The :attributes must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attributes must be greater than or equal to :value.',
        'string' => 'The :attributes must be greater than or equal to :value characters.',
    ],
    'image' => 'The :attributes must be an image.',
    'in' => 'The selected :attributes is invalid.',
    'in_array' => 'The :attributes field does not exist in :other.',
    'integer' => 'The :attributes must be an integer.',
    'ip' => 'The :attributes must be a valid IP address.',
    'ipv4' => 'The :attributes must be a valid IPv4 address.',
    'ipv6' => 'The :attributes must be a valid IPv6 address.',
    'json' => 'The :attributes must be a valid JSON string.',
    'lt' => [
        'array' => 'The :attributes must have less than :value items.',
        'file' => 'The :attributes must be less than :value kilobytes.',
        'numeric' => 'The :attributes must be less than :value.',
        'string' => 'The :attributes must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attributes must not have more than :value items.',
        'file' => 'The :attributes must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attributes must be less than or equal to :value.',
        'string' => 'The :attributes must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attributes must be a valid MAC address.',
    'max' => [
        'array' => 'The :attributes must not have more than :max items.',
        'file' => 'The :attributes must not be greater than :max kilobytes.',
        'numeric' => 'The :attributes must not be greater than :max.',
        'string' => 'The :attributes must not be greater than :max characters.',
    ],
    'mimes' => 'The :attributes must be a file of type: :values.',
    'mimetypes' => 'The :attributes must be a file of type: :values.',
    'min' => [
        'array' => 'The :attributes must have at least :min items.',
        'file' => 'The :attributes must be at least :min kilobytes.',
        'numeric' => 'The :attributes must be at least :min.',
        'string' => 'The :attributes must be at least :min characters.',
    ],
    'multiple_of' => 'The :attributes must be a multiple of :value.',
    'not_in' => 'The selected :attributes is invalid.',
    'not_regex' => 'The :attributes format is invalid.',
    'numeric' => 'The :attributes must be a number.',
    'password' => [
        'letters' => 'The :attributes must contain at least one letter.',
        'mixed' => 'The :attributes must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attributes must contain at least one number.',
        'symbols' => 'The :attributes must contain at least one symbol.',
        'uncompromised' => 'The given :attributes has appeared in a data leak. Please choose a different :attributes.',
    ],
    'present' => 'The :attributes field must be present.',
    'prohibited' => 'The :attributes field is prohibited.',
    'prohibited_if' => 'The :attributes field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attributes field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attributes field prohibits :other from being present.',
    'regex' => 'The :attributes format is invalid.',
    'required' => 'The :attributes field is required.',
    'required_array_keys' => 'The :attributes field must contain entries for: :values.',
    'required_if' => 'The :attributes field is required when :other is :value.',
    'required_unless' => 'The :attributes field is required unless :other is in :values.',
    'required_with' => 'The :attributes field is required when :values is present.',
    'required_with_all' => 'The :attributes field is required when :values are present.',
    'required_without' => 'The :attributes field is required when :values is not present.',
    'required_without_all' => 'The :attributes field is required when none of :values are present.',
    'same' => 'The :attributes and :other must match.',
    'size' => [
        'array' => 'The :attributes must contain :size items.',
        'file' => 'The :attributes must be :size kilobytes.',
        'numeric' => 'The :attributes must be :size.',
        'string' => 'The :attributes must be :size characters.',
    ],
    'starts_with' => 'The :attributes must start with one of the following: :values.',
    'doesnt_start_with' => 'The :attributes may not start with one of the following: :values.',
    'string' => 'The :attributes must be a string.',
    'timezone' => 'The :attributes must be a valid timezone.',
    'unique' => 'The :attributes has already been taken.',
    'uploaded' => 'The :attributes failed to upload.',
    'url' => 'The :attributes must be a valid URL.',
    'uuid' => 'The :attributes must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attributes.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attributes rule.
    |
    */

    'custom' => [
        'attributes-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attributes placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
