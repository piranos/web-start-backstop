<?php

declare(strict_types=1);

use Brick\Math;
/**
 * Description of mathClass
 *
 * @author deckhaus
 */
class MathClass {
    public function doMath() {
        $a = Math/BigDecimal::of('1/8');
        
        $b = $a->plus(5);
        
        return $b - $a;
    }
}
