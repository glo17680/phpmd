<?php

namespace PHPMD\Cache;

use PHPMD\Cache\Model\ResultCacheState;

class ResultCacheStateFactory
{
    /**
     * @param string $filePath
     * @return ResultCacheState|null
     */
    public static function fromFile($filePath)
    {
        if (file_exists($filePath) === false) {
            return null;
        }

        $state = require $filePath;

        return new ResultCacheState($state);
    }
}
