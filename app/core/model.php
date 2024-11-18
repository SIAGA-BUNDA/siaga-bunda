<?php
abstract class model
{
    public const RULE_REQUIRED = "required";
    public const RULE_NUMBER = "integer";
    public const RULE_EMAIL = "email";
    public const RULE_MIN = "min";
    public const RULE_MAX = "max";
    public const RULE_DATE = "date";

    public const RULE_UNIQUE_EMAIL = "unique_email";

    public const RULE_MATCH = "match";
    public const RULE_REGISTERED_EMAIL = "registered_email";
    public const RULE_CORRECT_PASSWORD = "correct_password";


    public array $errors = [];

    abstract public function rules($page): array;
    function validateDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    public function validate($page)
    {
        foreach ($this->rules($page) as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                $ruleName = $rule;
                //jika rule berupa array 
                if (!is_string($ruleName)) {
                    $ruleName = $rule[0];
                }
                if ($ruleName === self::RULE_REQUIRED && !trim($value)) {
                    $this->addError($attribute, self::RULE_REQUIRED);
                }
                if ($ruleName === self::RULE_EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->addError($attribute, self::RULE_EMAIL);   
                }

                if($ruleName === self::RULE_UNIQUE_EMAIL && !empty($this->getUserByEmail($this->{'email'}))){
                    $this->addError($attribute, self::RULE_UNIQUE_EMAIL);
                }

                if($ruleName === self::RULE_REGISTERED_EMAIL && empty($this->getUserByEmail($this->{'email'}))){
                    $this->addError($attribute, self::RULE_REGISTERED_EMAIL);
                }

                if($ruleName === self::RULE_CORRECT_PASSWORD){
                    if(password_verify($this->{'password'}, $this->getUserByEmail($this->{'email'})['PASSWORD'] ?? '')  ){
                                         
                    }else{
                        $this->addError($attribute, self::RULE_CORRECT_PASSWORD);  
                    }
                }
                if ($ruleName === self::RULE_MIN && strlen(ltrim($value)) < $rule['min']) {
                    $this->addError($attribute, self::RULE_MIN, $rule);
                }
                if ($ruleName === self::RULE_MAX && strlen(ltrim($value)) > $rule['max']) {
                    $this->addError($attribute, self::RULE_MAX, $rule);
                }

                if ($ruleName === self::RULE_NUMBER && !is_numeric($value)) {
                    $this->addError($attribute, self::RULE_NUMBER);
                }
                if ($ruleName === self::RULE_DATE && !$this->validateDate($value, 'Y-m-d')) {
                    echo $value.'<br>';
                    $this->addError($attribute, self::RULE_DATE);
                }
                
                if($ruleName === self::RULE_MATCH && $value !== $this->{$rule['match']}){
                    $this->addError($attribute, self::RULE_MATCH);
                }
            }
        }
        return empty($this->errors);
    }

    public function addError(string $attribute, string $rule, $params = [])
    {
        $message = $this->errorMessages($attribute)[$rule] ?? '';
        foreach ($params as $key => $rule) {
            $message = str_replace("{{$key}}", $rule, $message);
        }

        $this->errors[$attribute][] = $message;

    }

    public function errorMessages($field): array
    {
        return [
            self::RULE_REQUIRED => str_replace('_', ' ', ucfirst($field)) . ' tidak boleh kosong',
            self::RULE_EMAIL => 'Alamat ' . $field . ' tidak valid',
            self::RULE_MIN =>  str_replace('', ' ', ucfirst($field)) . ' harus lebih besar dari {min}',
            self::RULE_MAX => str_replace('', ' ', ucfirst($field)) . ' tidak boleh lebih besar dari {max}',
            self::RULE_NUMBER => str_replace('_', ' ', ucfirst($field)) . ' harus angka',
            self::RULE_DATE => 'Format '. str_replace('_', ' ', $field) . ' tidak valid',
            self::RULE_UNIQUE_EMAIL => 'Email sudah terdaftar',
            self::RULE_REGISTERED_EMAIL => 'Email belum terdaftar',
            self::RULE_CORRECT_PASSWORD => 'Kata sandi salah',
            self::RULE_MATCH => 'Kata sandi tidak sama'
        ];
    }
}

