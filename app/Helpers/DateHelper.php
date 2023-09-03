<?php

namespace App\Helpers;

use DateTime;

class DateHelper
{
    public static function formatIndonesianDate($date)
    {
        if (empty($date)) {
            return $date;
        }

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

    public static function formatIndonesianShortDate($date)
    {
        if (empty($date)) {
            return $date;
        }

        $months = [
            1 => 'Jan', 2 => 'Feb', 3 => 'Mar',
            4 => 'Apr', 5 => 'Mei', 6 => 'Jun',
            7 => 'Jul', 8 => 'Ags', 9 => 'Sep',
            10 => 'Okt', 11 => 'Nov', 12 => 'Des'
        ];

        $parts = explode('-', $date);
        if (count($parts) !== 3) {
            return $date;
        }

        $day = intval($parts[2]);
        $month = intval($parts[1]);
        $year = intval($parts[0]);

        if (!array_key_exists($month, $months)) {
            return $date;
        }

        $formatted_date = $day . ' ' . $months[$month] . ' ' . $year;
        return $formatted_date;
    }


    public static function formatIndonesianShortDateTime($dateTime)
    {
        $months = [
            1 => 'Jan', 2 => 'Feb', 3 => 'Mar',
            4 => 'Apr', 5 => 'Mei', 6 => 'Jun',
            7 => 'Jul', 8 => 'Ags', 9 => 'Sep',
            10 => 'Okt', 11 => 'Nov', 12 => 'Des'
        ];

        $dateTimeObj = DateTime::createFromFormat("Y-m-d H:i:s", $dateTime);

        if (!$dateTimeObj) {
            return $dateTime; // Invalid date-time format, return as is.
        }

        $day = $dateTimeObj->format("d");
        $month = intval($dateTimeObj->format("m"));
        $year = $dateTimeObj->format("Y");
        $time = $dateTimeObj->format("H:i");

        $formattedDateTime = $day . ' ' . $months[$month] . ' ' . $year . ' ' . $time;

        return $formattedDateTime;
    }

    public static function formatIndonesianDateTime($dateTime)
    {
        $months = [
            1 => 'Januari', 2 => 'Februari', 3 => 'Maret',
            4 => 'April', 5 => 'Mei', 6 => 'Juni',
            7 => 'Juli', 8 => 'Agustus', 9 => 'September',
            10 => 'Oktober', 11 => 'November', 12 => 'Desember'
        ];

        $dateTimeObj = DateTime::createFromFormat("Y-m-d H:i:s", $dateTime);

        if (!$dateTimeObj) {
            return $dateTime; // Invalid date-time format, return as is.
        }

        $day = $dateTimeObj->format("d");
        $month = intval($dateTimeObj->format("m"));
        $year = $dateTimeObj->format("Y");
        $time = $dateTimeObj->format("H:i");

        $formattedDateTime = $day . ' ' . $months[$month] . ' ' . $year . ' ' . $time;

        return $formattedDateTime;
    }

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

    public static function formatIndonesianTime($time)
    {
        $timeObj = DateTime::createFromFormat("H:i:s", $time);
        if ($timeObj) {
            // Format the time in Indonesian time format
            $indonesianTime = $timeObj->format("H:i");

            return $indonesianTime;
        }
    }
}
