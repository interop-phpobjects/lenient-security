<?php
namespace Interop\Lenient\Security\Crypto\PasswordEncoder;

interface PasswordEncoder
{
    public function encode($password,$salt=null,$algorithm=null);
    public function isPasswordValid($encodedPassword,$presentedPassword);
}