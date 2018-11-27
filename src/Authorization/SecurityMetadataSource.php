<?php
namespace Interop\Lenient\Security\Authorization;

interface SecurityMetadataSource
{
    public function getAttributes(/*Object*/ $object);
    public function supports(/*Object*/ $object);
}