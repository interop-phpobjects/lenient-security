<?php
namespace Interop\Lenient\Security\Authorization;

interface GrantedAuthority
{
    /**
     * @return String
     */
    public function getAuthority();
}