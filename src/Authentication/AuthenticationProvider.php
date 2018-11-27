<?php
namespace Interop\Lenient\Security\Authentication;

interface AuthenticationProvider
{
    /**
     * @param  AuthenticationToken   Unauthenticated token
     * @return AuthenticationToken   Authenticated token
     */
    public function authenticate(/*AuthenticationToken*/$token);

    /**
     * @param AuthenticationToken or Class
     * @return boolean
     */
    public function supports($token);
}