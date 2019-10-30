<?php

/**
 * Class PokerClass
 */
final class PokerClass
{
    /**
     * @param array $cards
     * @return bool
     */
    public static function isStraight(array $cards)
    {
        $last = 0;
        $count = 0;
        $valor = (count($cards) >= 5) ? 5 : count($cards);
        sort($cards);
        if (in_array(14, $cards)) {

            array_push($cards, 1);
            sort($cards);
            $valor = $valor - 1;
        }

        foreach ($cards as $card) {
            if ($card == $last) {
                continue;
            } else if ($card == ++$last) {
                $count++;
                $last = $card;
            } else {
                $count = 1;
                $last = $card;
            }

            if ($count == $valor) {
                return true;
            }
        }
        return false;
    }
}
