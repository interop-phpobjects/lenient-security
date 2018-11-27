<?php
namespace Interop\Lenient\Security\Web;

interface CsrfToken
{
    public function generateToken();
    public function isValid($token);
}
