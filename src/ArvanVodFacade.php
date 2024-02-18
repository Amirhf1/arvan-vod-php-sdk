<?php

namespace ArvanVOD\ArvanVod;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ArvanVOD\ArvanVod\Skeleton\SkeletonClass
 */
class ArvanVodFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'arvan-vod';
    }
}
