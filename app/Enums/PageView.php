<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

final class PageView extends Enum
{
    const INFORMASI_GEOGRAFIS = 'INFORMASI_GEOGRAFIS';
    const VISI_DAN_MISI = 'VISI_DAN_MISI';
    const STRUKTUR_PERANGKAT_DESA = 'STRUKTUR_PERANGKAT_DESA';
    const BANK_SAMPAH = 'BANK_SAMPAH';

    
    public static function title_case_no_underscore(string $string)
    {
        return Str::title(str_replace('_', ' ', $string));
    }

    public static function toTitleCase()
    {
        $arr    = Arr::except(self::toArray(), ['__DEFAULT']);
        $mapped = array_map(function ($item) use ($arr) {
            return self::title_case_no_underscore($item);
        }, $arr);

        return $mapped;
    }
}
