<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class OrientationLinkedAFPoint extends AbstractTag
{

    protected $Id = 1302;

    protected $Name = 'OrientationLinkedAFPoint';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Orientation Linked AF Point';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Same for vertical and horizontal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Select different AF points',
        ),
    );

}
