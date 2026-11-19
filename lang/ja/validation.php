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

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url' => ':attributeは、有効なURLではありません。',
    'after' => ':attributeには、:dateより後の日付を指定してください。',
    'after_or_equal' => ':attributeには、:date以降の日付を指定してください。',
    'alpha' => ':attributeには、アルファベットのみ使用できます。',
    'alpha_dash' => ':attributeには、英数字(\'A-Z\',\'a-z\',\'0-9\')とハイフンと下線(\'-\',\'_\')が使用できます。',
    'alpha_num' => ':attributeには、英数字(\'A-Z\',\'a-z\',\'0-9\')が使用できます。',
    'array' => ':attributeには、配列を指定してください。',
    'ascii' => ':attributeには、半角英数字と記号のみ使用できます。',
    'before' => ':attributeには、:dateより前の日付を指定してください。',
    'before_or_equal' => ':attributeには、:date以前の日付を指定してください。',
    'between' => [
        'array' => ':attributeの項目は、:min個から:max個にしてください。',
        'file' => ':attributeには、:min KBから:max KBまでのサイズのファイルを指定してください。',
        'numeric' => ':attributeには、:minから、:maxまでの数字を指定してください。',
        'string' => ':attributeは、:min文字から:max文字にしてください。',
    ],
    'boolean' => ':attributeには、\'true\'か\'false\'を指定してください。',
    'confirmed' => ':attributeと:attribute確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeは、正しい日付ではありません。',
    'date_equals' => ':attributeは:dateに等しい日付でなければなりません。',
    'date_format' => ':attributeの形式は、\':format\'と合いません。',
    'decimal' => ':attributeは、小数点以下が:decimal桁である必要があります。',
    'declined' => ':attributeを拒否する必要があります。',
    'declined_if' => ':otherが:valueの場合、:attributeを拒否する必要があります。',
    'different' => ':attributeと:otherには、異なるものを指定してください。',
    'digits' => ':attributeは、:digits桁にしてください。',
    'digits_between' => ':attributeは、:min桁から:max桁にしてください。',
    'dimensions' => ':attributeの画像サイズが無効です。',
    'distinct' => ':attributeの値が重複しています。',
    'doesnt_end_with' => ':attributeは、次のいずれかで終わってはなりません: :values',
    'doesnt_start_with' => ':attributeは、次のいずれかで始まってはなりません: :values',
    'email' => ':attributeは、有効なメールアドレス形式で指定してください。',
    'ends_with' => ':attributeは、次のうちのいずれかで終わらなければなりません。: :values',
    'enum' => '選択した:attributeは無効です。',
    'exists' => '選択された:attributeは、有効ではありません。',
    'file' => ':attributeはファイルでなければいけません。',
    'filled' => ':attributeは必須です。',
    'gt' => [
        'array' => ':attributeの項目数は、:value個より大きくなければなりません。',
        'file' => ':attributeは、:value KBより大きくなければなりません。',
        'numeric' => ':attributeは、:valueより大きくなければなりません。',
        'string' => ':attributeは、:value文字より大きくなければなりません。',
    ],
    'gte' => [
        'array' => ':attributeの項目数は、:value個以上でなければなりません。',
        'file' => ':attributeは、:value KB以上でなければなりません。',
        'numeric' => ':attributeは、:value以上でなければなりません。',
        'string' => ':attributeは、:value文字以上でなければなりません。',
    ],
    'image' => ':attributeには、画像を指定してください。',
    'in' => '選択された:attributeは、有効ではありません。',
    'in_array' => ':attributeが:otherに存在しません。',
    'integer' => ':attributeには、整数を指定してください。',
    'ip' => ':attributeには、有効なIPアドレスを指定してください。',
    'ipv4' => ':attributeはIPv4アドレスを指定してください。',
    'ipv6' => ':attributeはIPv6アドレスを指定してください。',
    'json' => ':attributeには、有効なJSON文字列を指定してください。',
    'lowercase' => ':attributeは、小文字で入力してください。',
    'lt' => [
        'array' => ':attributeの項目数は、:value個より小さくなければなりません。',
        'file' => ':attributeは、:value KBより小さくなければなりません。',
        'numeric' => ':attributeは、:valueより小さくなければなりません。',
        'string' => ':attributeは、:value文字より小さくなければなりません。',
    ],
    'lte' => [
        'array' => ':attributeの項目数は、:value個以下でなければなりません。',
        'file' => ':attributeは、:value KB以下でなければなりません。',
        'numeric' => ':attributeは、:value以下でなければなりません。',
        'string' => ':attributeは、:value文字以下でなければなりません。',
    ],
    'mac_address' => ':attributeは有効なMACアドレスである必要があります。',
    'max' => [
        'array' => ':attributeの項目は、:max個以下にしてください。',
        'file' => ':attributeには、:max KB以下のファイルを指定してください。',
        'numeric' => ':attributeには、:max以下の数字を指定してください。',
        'string' => ':attributeは、:max文字以下にしてください。',
    ],
    'max_digits' => ':attributeは、:max桁以下の数字である必要があります。',
    'mimes' => ':attributeには、:valuesタイプのファイルを指定してください。',
    'mimetypes' => ':attributeには、:valuesタイプのファイルを指定してください。',
    'min' => [
        'array' => ':attributeの項目は、:min個以上にしてください。',
        'file' => ':attributeには、:min KB以上のファイルを指定してください。',
        'numeric' => ':attributeには、:min以上の数字を指定してください。',
        'string' => ':attributeは、:min文字以上にしてください。',
    ],
    'min_digits' => ':attributeは、:min桁以上の数字である必要があります。',
    'missing' => ':attributeを入力する必要はありません。',
    'missing_if' => ':otherが:valueの場合、:attributeを入力する必要はありません。',
    'missing_unless' => ':otherが:valueでない限り、:attributeを入力する必要はありません。',
    'missing_with' => ':valuesが存在する場合、:attributeを入力する必要はありません。',
    'missing_with_all' => ':valuesが存在する場合、:attributeを入力する必要はありません。',
    'multiple_of' => ':attributeは:valueの倍数である必要があります。',
    'not_in' => '選択された:attributeは、有効ではありません。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeには、数字を指定してください。',
    'password' => [
        'letters' => ':attributeは文字を1文字以上含める必要があります。',
        'mixed' => ':attributeは大文字と小文字をそれぞれ1文字以上含める必要があります。',
        'numbers' => ':attributeは数字を1文字以上含める必要があります。',
        'symbols' => ':attributeは記号を1文字以上含める必要があります。',
        'uncompromised' => ':attributeは情報漏洩した可能性があります。他の:attributeを選択してください。',
    ],
    'present' => ':attributeが存在している必要があります。',
    'prohibited' => ':attributeフィールドは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeフィールドは禁止されています。',
    'prohibited_unless' => ':otherが:valuesでない限り、:attributeフィールドは禁止されています。',
    'prohibits' => ':attributeフィールドは:otherの存在を禁止しています。',
    'regex' => ':attributeには、有効な正規表現を指定してください。',
    'required' => ':attributeは、必ず指定してください。',
    'required_array_keys' => ':attributeフィールドには、:valuesのエントリを含める必要があります。',
    'required_if' => ':otherが:valueの場合、:attributeを指定してください。',
    'required_if_accepted' => ':otherを承認した場合、:attributeは必須項目です。',
    'required_unless' => ':otherが:values以外の場合、:attributeを指定してください。',
    'required_with' => ':valuesが指定されている場合、:attributeも指定してください。',
    'required_with_all' => ':valuesが全て指定されている場合、:attributeも指定してください。',
    'required_without' => ':valuesが指定されていない場合、:attributeを指定してください。',
    'required_without_all' => ':valuesが全て指定されていない場合、:attributeを指定してください。',
    'same' => ':attributeと:otherが一致しません。',
    'size' => [
        'array' => ':attributeの項目は、:size個にしてください。',
        'file' => ':attributeには、:size KBのファイルを指定してください。',
        'numeric' => ':attributeには、:sizeを指定してください。',
        'string' => ':attributeは、:size文字にしてください。',
    ],
    'starts_with' => ':attributeは、次のいずれかで始まる必要があります。:values',
    'string' => ':attributeには、文字を指定してください。',
    'timezone' => ':attributeには、有効なタイムゾーンを指定してください。',
    'unique' => '指定の:attributeは既に使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeは、大文字で入力してください。',
    'url' => ':attributeは、有効なURL形式で指定してください。',
    'ulid' => ':attributeは、有効なULIDである必要があります。',
    'uuid' => ':attributeは、有効なUUIDである必要があります。',

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
