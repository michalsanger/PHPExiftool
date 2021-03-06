<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Stim;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class CropYCommonOffset extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'CropYCommonOffset';

    protected $FullName = 'Stim::CropY';

    protected $GroupName = 'Stim';

    protected $g0 = 'Stim';

    protected $g1 = 'Stim';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Crop Y Common Offset';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Common Offset Setting',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Individual Offset Setting',
        ),
    );

}
