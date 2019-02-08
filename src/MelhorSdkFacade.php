<?php

namespace Sergiolourojunior\MelhorSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sergiolourojunior\MelhorSdk\Skeleton\SkeletonClass
 */
class MelhorSdkFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'melhor-sdk';
    }
}
