<?php
namespace Interop\Lenient\Security\Authentication;

interface SecurityContext
{
    public function getAuthentication();
    public function setAuthentication(/*Authentication*/$authentication);
    public function setDefaultAuthentication(/*Authentication*/$defaultAuthentication);
}