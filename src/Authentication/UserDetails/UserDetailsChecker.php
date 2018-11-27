<?php
namespace Interop\Lenient\Security\Authentication\UserDetails;

interface UserDetailsChecker
{
    /**
     * @param UserDetails $user the UserDetails instance whose status should be checked.
     * @return void  
     */
    public function check(/*UserDetails*/ $user);
}
