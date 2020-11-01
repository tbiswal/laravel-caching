<?php


namespace App\Exceptions;


class CustomException extends \Exception
{
    public function render()
    {
        return 'Hi';
    }

}
