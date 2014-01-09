<?php

namespace Mibou\Monolog\Formatter;

use Monolog\Formatter\LineFormatter;

/**
 * Class DesktopFormatter
 *
 * Currently only used to specify a format, may help formatting
 * date specifically for desktop notifications display.
 *
 * @author  Michael BOUVY <michael.bouvy@gmail.com>
 * @package Mibou\Monolog\Formatter
 */
class DesktopFormatter extends LineFormatter
{
    const SIMPLE_FORMAT = "[%datetime%] \n %message%";
}
