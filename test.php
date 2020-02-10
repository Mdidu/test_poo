<?php

class Text{
    // public static function publicWidthZero($chiffre){

    //     return self::widthZero($chiffre);
    //     // if($chiffre < 9){
    //     //     return '0'.$chiffre;
    //     // }else {
    //     //     return $chiffre;
    //     // }
    // }
    private static $suffix = "€";
    const SUFFIX = "€";
/**
 * @param chiffre int
 * @return int 
 * self équivalent à Text dans ce cas
 * $chiffre.self::SUFFIX = 0X€ ou X€ X = chiffre
 */
    public static function widthZero($chiffre){
        if($chiffre < 9){
            return '0'.$chiffre.self::SUFFIX;
        }else {
            return $chiffre.self::SUFFIX;
        }
    }
}