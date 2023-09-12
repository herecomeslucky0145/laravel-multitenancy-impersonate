<?php

namespace Pratikkuikel\LaravelMultitenancyImpersonate\Models;

use Illuminate\Database\Eloquent\Model;
use Pratikkuikel\LaravelMultitenancyImpersonate\Contracts\ImpersonatorContract;

class ImpersonationLog extends Model implements ImpersonatorContract
{
    public function canImpersonate(): bool
    {
        return true;
    }

    public function impersonate()
    {
    }
}
