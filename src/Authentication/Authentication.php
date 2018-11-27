<?php
namespace Interop\Lenient\Security\Authentication;

interface Authentication
{
    /**
     * @return void
     */
    public function eraseCredentials();

    /**
     * @return Array<Object>
     */
    public function getAuthorities();

    /**
     * @return Object or any
     */
    public function getCredentials();

    /**
     * @return Object or any
     */
    public function getPrincipal();

    /**
     * @return boolean $authenticated
     */
    public function isAuthenticated();

    /**
     * @param boolean $authenticated
     * @return void
     */
    public function setAuthenticated($authenticated);
}