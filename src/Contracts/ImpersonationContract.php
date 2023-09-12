<?php

namespace Pratikkuikel\LaravelMultitenancyImpersonate\Contracts;

interface ImpersonationContract
{
    /**
     * Determines if the impersonation is supported
     *
     * @param  int     $param1   Description of the first parameter.
     * @param  string  $param2   Description of the second parameter.
     * @return mixed            Description of the return value.
     * @throws Exception       Description of when an exception is thrown.
     */
    public function isImpersonationSupported(): bool;

    /**
     * Returns the current multitenancy setup type either single-db or multi-db
     *
     * @param  int     $param1   Description of the first parameter.
     * @param  string  $param2   Description of the second parameter.
     * @return mixed            Description of the return value.
     * @throws Exception       Description of when an exception is thrown.
     */
    public function getMultitenancyType();

    /**
     * Impersonates the user and redirects to tenant dashboard
     *
     * @param  int     $param1   Description of the first parameter.
     * @param  string  $param2   Description of the second parameter.
     * @return mixed            Description of the return value.
     * @throws Exception       Description of when an exception is thrown.
     */
    public function impersonateUser(int $impersonator_user_id, int $impersonated_user_id, $token, $domain = null, $authGuard = null);

    /**
     * Determines if the user is currently impersonating
     *
     * @param  int     $param1   Description of the first parameter.
     * @param  string  $param2   Description of the second parameter.
     * @return mixed            Description of the return value.
     * @throws Exception       Description of when an exception is thrown.
     */
    public function isCurrentlyImpersonating();

    /**
     * Ends the current impersonation
     *
     * @param  int     $param1   Description of the first parameter.
     * @param  string  $param2   Description of the second parameter.
     * @return mixed            Description of the return value.
     * @throws Exception       Description of when an exception is thrown.
     */
    public function endCurrentImpersonation();
}
