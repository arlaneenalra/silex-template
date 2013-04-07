<?php

namespace SegmentNine\Silex;

use Silex\Application as Base; 

/** 
 * A custom application instance that includes a few useful traits
 *
 * @author Chris Salch <chris@seg9.com>
 */
class Application extends Base 
{
    use Base\TranslationTrait;
    use Base\TwigTrait;
    use Base\UrlGeneratorTrait;
    use Base\FormTrait;
    use Base\SecurityTrait;
}
