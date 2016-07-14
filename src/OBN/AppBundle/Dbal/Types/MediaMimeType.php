<?php

namespace OBN\AppBundle\Dbal\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

/**
 * MediaType
 */
class MediaMimeType extends AbstractEnumType
{
    const IMAGE_JPEG = 'image/jpeg';
    const IMAGE_PNG = 'image/png';
    const IMAGE_BMP = 'image/bmp';
    const VIDEO_MP4 = 'video/mp4';
    const VIDEO_MOV = 'video/quicktime';

    protected static $choices = [
        self::IMAGE_JPEG => 'jpeg',
        self::IMAGE_PNG => 'png',
        self::IMAGE_BMP => 'bmp',
        self::VIDEO_MP4 => 'mp4',
        self::VIDEO_MOV => 'mov'
    ];
}
