<?php
namespace Rakaaditya\KFormat;

/**
 * This class is for handling number converter
 *
 * @package KFormat
 * @author raka aditya <hai@rakaaditya.com>
 * @since version 1.0 <March 2016>
 */

class Format
{
    public static function convert($number, $decimals = 1)
    {
        if ($number > 999 && $number <= 999999) {
            $formatted = number_format($number / 1000, $decimals, '.', ' ').'K'; 
            if($number % 1000 === 0)
                $formatted = floor($formatted).'K';
        } elseif ($number > 999999 && $number <= 999999999) {
            $formatted = number_format($number / 1000000, $decimals, '.', ' ').'M';
            if($number % 1000000 === 0)
                $formatted = floor($formatted).'M';
        } elseif ($number > 999999999) {
            $formatted = number_format($number / 1000000000, $decimals, '.', ' ').'B';
            if($number % 1000000000 === 0)
                $formatted = floor($formatted).'B';
        } else {
            $formatted = $number;
        }

        return $formatted;
    }
}
