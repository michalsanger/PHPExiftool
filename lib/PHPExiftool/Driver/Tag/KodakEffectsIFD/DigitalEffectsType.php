<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\KodakEffectsIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class DigitalEffectsType extends AbstractTag
{

    protected $Id = 2;

    protected $Name = 'DigitalEffectsType';

    protected $FullName = 'Kodak::SpecialEffects';

    protected $GroupName = 'KodakEffectsIFD';

    protected $g0 = 'Meta';

    protected $g1 = 'KodakEffectsIFD';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Digital Effects Type';

}
