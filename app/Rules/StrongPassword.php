<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class StrongPassword implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/', $value)) {
            $fail(__('L\'attribut doit comporter au moins 8 caractères et contenir au moins une lettre majuscule, une lettre minuscule et un chiffre.'));
        }
    }
}
