<?php
/**
 * This file is part of symfony.
 * Author: louxin
 * Date: 14-5-6
 * Time: 22:18
 * File: ImageTypeExtension.php
 */

namespace Rick\BabyBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;

class ImageTypeExtension extends AbstractTypeExtension
{
    /**
     * Returns the name of the type being extended.
     *
     * @return string The name of the type being extended
     */
    public function getExtendedType()
    {
        return 'file';
    }
}
