<?php
abstract class model
{
    public const RULE_REQUIRED = "required";
    public const RULE_NUMBER = "integer";
    public const RULE_EMAIL = "email";
    public const RULE_MIN = "min";
    public const RULE_MAX = "max";

    public array $errors = [];

    abstract public function rules(): array;

    public function validate()
    {
        foreach ($this->rules() as $attribute => $rules) {
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
                if ($ruleName === self::RULE_MIN && strlen(ltrim($value)) < $rule['min']) {
                    $this->addError($attribute, self::RULE_MIN, $rule);
                }
                if ($ruleName === self::RULE_MAX && strlen(ltrim($value)) > $rule['max']) {
                    $this->addError($attribute, self::RULE_MAX, $rule);
                }

                if ($ruleName === self::RULE_NUMBER && !is_numeric($value)) {
                    $this->addError($attribute, self::RULE_NUMBER);
                }
                return empty($this->errors);
            }
        }
    }

    public function addError(string $attribute, string $rule, $params = [])
    {
        $message = $this->errorMessages($attribute)[$rule] ?? '';
        foreach ($params as $key => $rule) {
            $message = str_replace("{{$key}}", $rule, $message);
        }
        if (empty($this->errors[$attribute])) {
            $this->errors[$attribute][] = $message;
        }
    }

    public function errorMessages($field): array
    {
        return [
            self::RULE_REQUIRED => 'Field ' . $field . ' is required',
            self::RULE_EMAIL => 'Field ' . $field . ' must be a valid email address',
            self::RULE_MIN => 'Min length of field ' . $field . ' must be  greter than  {min}',
            self::RULE_MAX => 'Max length of field ' . $field . ' must be less than {max}',
            self::RULE_NUMBER => 'Field ' . $field . ' must be a valid number',
        ];
    }
}

