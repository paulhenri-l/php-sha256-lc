<?php

if (!function_exists('sha256_lc')) {
    function sha256_lc(string $value): string
    {
        return hash('sha256', mb_strtolower($value));
    }
}
