<?php

namespace PHPExiftool\Test;

use PHPExiftool\PHPExiftoolServiceProvider;
use Silex\Application;

class PHPExiftoolServiceProviderTest extends \PHPUnit_Framework_TestCase
{

    public function testRegister()
    {
        $app = $this->getApplication();
        $app->register(new PHPExiftoolServiceProvider);

        $this->assertInstanceOf('PHPExiftool\\Reader', $app['exiftool.reader']);
        $this->assertInstanceOf('PHPExiftool\\Writer', $app['exiftool.writer']);
        $this->assertInstanceOf('PHPExiftool\\Exiftool', $app['exiftool.processor']);
        $this->assertInstanceOf('PHPExiftool\\PreviewExtractor', $app['exiftool.preview-extractor']);
    }

    protected function getApplication()
    {
        return new Application();
    }

}