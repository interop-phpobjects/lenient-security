<?php
namespace Interop\Lenient\Security\Authentication;

interface AuthenticationManager
{
    /**
     * @param  AuthenticationToken   Unauthenticated token
     * @return AuthenticationToken   Authenticated token
     */
    public function authenticate(/*AuthenticationToken*/$token);
}