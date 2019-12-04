<?php

namespace App;

/**
 * 
 */
class Validator 
{
    
   public static function  isInt($var)
    {
      return (is_int($var) || ctype_digit($var));
    }

    public static function sanitize($input){
        $input= trim($input);
        $input = stripslashes($input);
        $input= htmlspecialchars($input);
        return $input;
          
    }
}