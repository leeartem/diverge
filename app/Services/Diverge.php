<?php

namespace App\Services;

use App\Interfaces\DivergeInterface;

class Diverge implements DivergeInterface
{
    // Допустимое отклонение в %
    private $possibleDeviation = 10;

    // Результат отклонения в %
    private $currentDeviation = 0;

    /**
     * Отклонение цены не должно быть больше допустимого значения (%)
     *
     * @param float $new
     * @param float $out
     * @return bool
     */
    public function diffPrice(float $new, float $out): bool
    {
        $this->currentDeviation = abs(($new - $out) / $out * 100);

        return $this->currentDeviation <= $this->possibleDeviation;
    }

    /**
     * Результат отклонения в %
     *
     * @return float
     */
    public function getDeviation(): float
    {
        return $this->currentDeviation;
    }
}
