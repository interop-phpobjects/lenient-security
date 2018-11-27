<?php
namespace Interop\Lenient\Security\Authorization;

interface AfterInvocationManager
{
    /**
     * @param Authentication     $authentication
     * @param Object             $object
     * @param Array<ConfigAttribute>  $configAttributes
     * @return void
     */
    public function decide(/*Authentication*/ $authentication, /*Object*/ $object, array $attributes, $returnedObject);
    public function supports(/*ConfigAttribute*/ $attribute);
}