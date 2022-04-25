<?php  
class Speedometer
{
    public const MILES = 1.6;
    public const KM = 0.621;

    public static function convertMilesToKm(int|float $miles): int|float
    {
        return $miles * self::KM ;
    }

    public static function convertKmToMiles(int|float $km): int|float
    {
        return $km * self::MILES;
    }

}


echo Speedometer::convertKmToMiles(10).PHP_EOL;
echo Speedometer::convertMilesToKm(10);