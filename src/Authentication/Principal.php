<?php
namespace Interop\Lenient\Security\Authentication;

interface Principal
{
    public function __toString();
    public function getId();
}
