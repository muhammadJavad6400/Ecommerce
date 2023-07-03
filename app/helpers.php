<?php

use Carbon\Carbon;
use Hekmatinasser\Verta\Facades\Verta;

function generateFileName($name)
{
    $year = Carbon::now()->year;
    $month = Carbon::now()->month;
    $day = Carbon::now()->day;
    $hour = Carbon::now()->hour;
    $minute = Carbon::now()->minute;
    $second = Carbon::now()->second;
    $microSecond = Carbon::now()->microsecond;

    return $year . '_' . $month . '_' . $day . '_' . $hour . '_' . $minute . '_' . $second . '_' . $microSecond . '_' . $name;
}


function convertJalaliDateToGregorian($jalaliDate)
{
    if ($jalaliDate == null) {
        return null;
    }else {
        $pattern = "/[-\s]/";
        $jalaliDateSplit =  preg_split($pattern, $jalaliDate);
        $arrayGregorianDate = Verta::jalaliToGregorian($jalaliDateSplit[0], $jalaliDateSplit[1], $jalaliDateSplit[2]);
        return implode("-", $arrayGregorianDate) . " " . $jalaliDateSplit[3];
    }
}
