<?php

/*
 * This file is part of php-cache\doctrine-adapter package.
 *
 * (c) 2015-2015 Aaron Scherer <aequasi@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Cache\Adapter\Doctrine\Tests;

use Cache\Adapter\Doctrine\DoctrineCachePool;
use Cache\IntegrationTests\CachePoolTest as BaseTest;
use Doctrine\Common\Cache\ArrayCache;

class IntegrationPoolTest extends BaseTest
{
    private $doctrineCache = null;

    public function createCachePool()
    {
        return new DoctrineCachePool($this->getDoctrineCache());
    }

    private function getDoctrineCache()
    {
        if ($this->doctrineCache === null) {
            $this->doctrineCache = new ArrayCache();
        }

        return $this->doctrineCache;
    }
}