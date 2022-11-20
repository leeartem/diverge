<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Services\Diverge;

class DivergeRule implements Rule
{
    private $out;

    /**
     * Create a new rule instance.
     *
     * @param float|null $out
     * @return void
     */
    public function __construct(?float $out)
    {
        $this->out = $out;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $service = new Diverge();
        return $this->out && $service->diffPrice($value, $this->out);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'FieldA and FieldB should both have Custom values if FieldA contains Custom value.';
    }
}
