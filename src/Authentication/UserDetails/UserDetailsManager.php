<?php
namespace Interop\Lenient\Security\Authentication\UserDetails;

interface UserDetailsManager extends UserDetailsService
{
    /**
     * Create a new user with the supplied details.
     * @return void
     */
    public function createUser(/*UserDetails*/ $user);

    /**
     * Update the specified user.
     * @return void
     */
    public function updateUser(/*UserDetails*/ $user);

    /**
     * Remove the user with the given login name from the system.
     * @return void
     */
    public function deleteUser(/*String*/ $username);

    /**
     * Check if a user with the supplied login name exists in the system.
     * @return boolean
     */
    public function userExists(/*String*/ $username);
}
