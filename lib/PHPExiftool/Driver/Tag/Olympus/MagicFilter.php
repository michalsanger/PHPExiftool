<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class MagicFilter extends AbstractTag
{

    protected $Id = 1324;

    protected $Name = 'MagicFilter';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Magic Filter';

    protected $flag_Permanent = true;

    protected $MaxLength = 4;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Soft Focus',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Pop Art',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Pale & Light Color',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Light Tone',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Pin Hole',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Grainy Film',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Diorama',
        ),
        10 => array(
            'Id' => 10,
            'Label' => 'Cross Process',
        ),
        12 => array(
            'Id' => 12,
            'Label' => 'Fish Eye',
        ),
        13 => array(
            'Id' => 13,
            'Label' => 'Drawing',
        ),
        14 => array(
            'Id' => 14,
            'Label' => 'Gentle Sepia',
        ),
        15 => array(
            'Id' => 15,
            'Label' => 'Tender Light',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Pop Art II',
        ),
        17 => array(
            'Id' => 17,
            'Label' => 'Pin Hole II',
        ),
        18 => array(
            'Id' => 18,
            'Label' => 'Pin Hole III',
        ),
        19 => array(
            'Id' => 19,
            'Label' => 'Grainy Film II',
        ),
        20 => array(
            'Id' => 20,
            'Label' => 'Dramatic Tone',
        ),
        21 => array(
            'Id' => 21,
            'Label' => 'Punk',
        ),
        22 => array(
            'Id' => 22,
            'Label' => 'Soft Focus 2',
        ),
        23 => array(
            'Id' => 23,
            'Label' => 'Sparkle',
        ),
        24 => array(
            'Id' => 24,
            'Label' => 'Watercolor',
        ),
        25 => array(
            'Id' => 25,
            'Label' => 'Key Line',
        ),
        27 => array(
            'Id' => 27,
            'Label' => 'Miniature',
        ),
        28 => array(
            'Id' => 28,
            'Label' => 'Reflection',
        ),
        29 => array(
            'Id' => 29,
            'Label' => 'Fragmented',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Dramatic Tone B&W',
        ),
        33 => array(
            'Id' => 33,
            'Label' => 'Watercolor II',
        ),
    );

}
