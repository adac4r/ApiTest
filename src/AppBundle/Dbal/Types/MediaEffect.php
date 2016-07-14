<?php

namespace OBN\AppBundle\Dbal\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

/**
 * MediaEffect
 */
class MediaEffect extends AbstractEnumType
{
    const EFFECT_RESIZE = 'resize';
    const EFFECT_SCALE_RESIZE = 'scale_resize';
    const EFFECT_CROP_RESIZE = 'crop_resize';
    const EFFECT_FORCE_RESIZE = 'force_resize';
    const EFFECT_CROP_ZOOM = 'crop_zoom';

    protected static $choices = [
        self::EFFECT_RESIZE => 'Resize',
        self::EFFECT_SCALE_RESIZE => 'Scale resize',
        self::EFFECT_CROP_RESIZE => 'Crop resize',
        self::EFFECT_FORCE_RESIZE => 'Force resize',
        self::EFFECT_CROP_ZOOM => 'Crop zoom'
    ];
}
