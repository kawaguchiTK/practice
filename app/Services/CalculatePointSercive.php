<?php
declare(strict_types=1);

namespace App\Services;
use App\Exceptions\PreConditionException;

final class CalculatePointService
{
    public function calcPoint(int $amount) :int
    {
         if ($amount < 0) {
             throw new PreconditionException('購入金額が負の数');
         } elseif ($amount < 1000) {
            return 0;
         } elseif ($amount < 10000) {
             $basePoint = 1;
         } else {
             $basePoint = 2;
         }

         return ($amount / 100) * $basePoint;

    }



}