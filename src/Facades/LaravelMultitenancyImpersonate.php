<?php

namespace Pratikkuikel\LaravelMultitenancyImpersonate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pratikkuikel\LaravelMultitenancyImpersonate\LaravelMultitenancyImpersonate
 */
class LaravelMultitenancyImpersonate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Pratikkuikel\LaravelMultitenancyImpersonate\LaravelMultitenancyImpersonate::class;
    }
}
