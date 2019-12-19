<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DeactivateEligable implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute // status_id
     * @param  mixed  $value // int
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($value == 2 & in_array($value, [1, 2, 3, 4, 9])) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Publisher account can not be deactivated before pending deals are canceled.';
    }
}
