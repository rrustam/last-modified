<?php

declare(strict_types=1);

namespace Rrustam\LastModified\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void set(\Illuminate\Support\Carbon|null $updated_at)
 * @method static \Illuminate\Support\Carbon|null get()
 *
 * @see \Rrustam\LastModified\LastModified
 */
class LastModified extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'last-modified';
    }
}
