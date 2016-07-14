<?php

namespace OBN\AppBundle\Dbal\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

/**
 * MediaProvider
 */
class MediaProvider extends AbstractEnumType
{
    const ONLYBEAUTIFULNEWS = 'onlybeautifulnews';
    const YOUTUBE = 'youtube';
//    const VIMEO = 'vimeo';
//    const DAILYMOTION = 'dailymotion';

    protected static $choices = [
        self::ONLYBEAUTIFULNEWS => 'Onlybeautifunews',
        self::YOUTUBE => 'YouTube',
//        self::VIMEO => 'Vimeo',
//        self::DAILYMOTION => 'Dailymotion',
    ];
    
}
