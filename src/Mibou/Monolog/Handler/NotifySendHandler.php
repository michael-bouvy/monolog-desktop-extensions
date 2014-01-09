<?php

namespace Mibou\Monolog\Handler;

use Mibou\Monolog\Formatter\DesktopFormatter;
use Monolog\Handler\AbstractProcessingHandler;
use Symfony\Component\Process\Process;

/**
 * Class NotifySendHandler
 *
 * This handler is heavily inspired by Fabien Potencier's
 * DBusNotifier from Sismo application.
 *
 * @see https://github.com/fabpot/Sismo/blob/master/src/Sismo/Notifier/
 *
 * @author  Michael BOUVY <michael.bouvy@gmail.com>
 * @package Mibou\Monolog\Handler
 */
class NotifySendHandler extends AbstractProcessingHandler
{
    /**
     * Version of the extension
     */
    const VERSION = '0.1';

    /**
     * Send notification using notify-send
     *
     * TODO : check that notify-send binary exists locally
     *
     * @param array $record
     */
    protected function write(array $record)
    {
        $title = $record['channel'] . ' - ' . $record['level_name'];
        $process = new Process(
            sprintf('notify-send "%s" "%s"', $title, $record['formatted'])
        );
        $process->setTimeout(2);
        $process->run();
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultFormatter()
    {
        return new DesktopFormatter();
    }
}
