<?php


class Date
{
    public static function iso_para_brasil($date)
    {
        $dateTime = new DateTime($date);

        return $dateTime->format("d/m/Y");
    }


}