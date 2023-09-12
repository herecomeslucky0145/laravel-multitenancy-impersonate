<?php

namespace Pratikkuikel\LaravelMultitenancyImpersonate\Contracts;

interface ImpersonatorContract
{
    /**
     * Determines if the user can impersonate tenants
     *
     * @return bool            true or false
     */
    public function canImpersonate(): bool;
}
