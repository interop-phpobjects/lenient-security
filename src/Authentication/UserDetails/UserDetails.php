<?php
namespace Interop\Lenient\Security\Authentication\UserDetails;

interface UserDetails
{
    /**
     * Returns the authorities granted to the user. Cannot return <code>null</code>.
     * @return Array<Object> Authorities
     */
    public function getAuthorities();

    /**
     * Returns the password used to authenticate the user.
     * @return String the password
     */
    public function getPassword();

    /**
     * Returns the username used to authenticate the user. Cannot return <code>null</code>
     * @return String the username (never <code>null</code>)
     */
    public function getUsername();

    /**
     * Indicates whether the user's account has expired. An expired account cannot be
     * authenticated.
     *
     * @return boolean  true: if the user's account is valid (ie non-expired),
     *                  false: if no longer valid (ie expired)
     */
    public function isAccountNonExpired();

    /**
     * Indicates whether the user is locked or unlocked. A locked user cannot be
     * authenticated.
     *
     * @return boolean  <code>true</code> if the user is not locked, <code>false</code> otherwise
     */
    public function isAccountNonLocked();

    /**
     * Indicates whether the user's credentials (password) has expired. Expired
     * credentials prevent authentication.
     *
     * @return boolean <code>true</code> if the user's credentials are valid (ie non-expired),
     * <code>false</code> if no longer valid (ie expired)
     */
    public function isCredentialsNonExpired();

    /**
     * Indicates whether the user is enabled or disabled. A disabled user cannot be
     * authenticated.
     *
     * @return boolean <code>true</code> if the user is enabled, <code>false</code> otherwise
     */
    public function isEnabled();
}