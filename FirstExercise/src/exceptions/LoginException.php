<?php


namespace FirstExercise;


use phpDocumentor\Reflection\Types\Integer;

final class LoginException extends \Exception
{

    public static function userNotExists(int $user_id):LoginException
    {
        return new self("El usuario con id $user_id no existe", 203);
    }

}