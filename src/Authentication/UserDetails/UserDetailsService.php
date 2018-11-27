<?php
namespace Interop\Lenient\Security\Authentication\UserDetails;

interface UserDetailsService
{
    /**
     * @param String  $username the username identifying the user whose data is required.
     *
     * @return UserDetails  a fully populated user record (never <code>null</code>)
     *
     * @throws UsernameNotFoundException if the user could not be found or the user has no
     * GrantedAuthority
     */
    public function loadUserByUsername($username);
}
