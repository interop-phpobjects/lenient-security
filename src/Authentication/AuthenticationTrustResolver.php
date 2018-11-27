<?php
namespace Interop\Lenient\Security\Authentication;

interface AuthenticationTrustResolver
{
    public function isAnonymous(/*Authentication*/ $authentication);
    public function isRememberMe(/*Authentication*/ $authentication);
}