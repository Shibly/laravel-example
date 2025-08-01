<?php

namespace Shibly\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shibly\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Shibly\Example\Example::class;
    }
}
