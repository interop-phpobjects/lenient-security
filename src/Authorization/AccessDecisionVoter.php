<?php
namespace Interop\Lenient\Security\Authorization;

interface AccessDecisionVoter
{
    const ACCESS_ABSTAIN = 0;
    const ACCESS_DENIED  = -1;
    const ACCESS_GRANTED =  1;

    /**
     * @param Authentication     $authentication
     * @param Object             $object
     * @param Array<ConfigAttribute>  $configAttributes
     * @return int ACCESS_ABSTAIN or ACCESS_DENIED or ACCESS_GRANTED
     */
    public function vote(/*Authentication*/ $authentication, $object, array $attributes);
    public function supports(/*ConfigAttribute*/ $attribute);
}