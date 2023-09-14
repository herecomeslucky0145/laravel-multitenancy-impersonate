<?php

namespace Pratikkuikel\LaravelMultitenancyImpersonate\Services;

use Pratikkuikel\LaravelMultitenancyImpersonate\Contracts\ImpersonationContract;

class ImpersonationService implements ImpersonationContract
{

    public function isImpersonationSupported(): bool
    {
        // check for availability of the spatie multitenancy package
        return true;
    }

    public function getMultitenancyType()
    {
        //  figure out a way to determing the single db or multi db setup
        // what you gonna do after you figure it out?
    }

    public function impersonateUser(int $impersonator_user_id, int $impersonated_user_id, $token, $domain = null, $authGuard = null)
    {
    }

    public function isCurrentlyImpersonating()
    {
    }
    public function endCurrentImpersonation()
    {
    }
}
