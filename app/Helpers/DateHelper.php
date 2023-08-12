<?php

namespace App\Helpers;

use DateTime;

class DateHelper
{
    public static function formatIndonesianDate($date)
    {
        $months = [
            1 => 'Januari', 2 => 'Februari', 3 => 'Maret',
            4 => 'April', 5 => 'Mei', 6 => 'Juni',
            7 => 'Juli', 8 => 'Agustus', 9 => 'September',
            10 => 'Oktober', 11 => 'November', 12 => 'Desember'
        ];

        $parts = explode('-', $date);
        if (count($parts) !== 3) {
            return $date; // Invalid date format, return as is.
        }

        $day = intval($parts[2]);
        $month = intval($parts[1]);
        $year = intval($parts[0]);

        if (!array_key_exists($month, $months)) {
            return $date; // Invalid month, return as is.
        }

        $formatted_date = $day . ' ' . $months[$month] . ' ' . $year;
        return $formatted_date;
    }
    // DateHelper.php

    public static function formatCreatedAt($createdAt)
    {
        $now = new DateTime();
        $createdDate = new DateTime($createdAt);
        $interval = $now->diff($createdDate);

        if ($interval->days > 20) {
            return $createdDate->format('j M Y');
        } elseif ($interval->days >= 1) {
            return $interval->format('%a') . ' hari yang lalu';
        } elseif ($interval->h >= 1) {
            return $interval->format('%h jam yang lalu');
        } else {
            return $interval->format('%i menit yang lalu');
        }
    }
}
