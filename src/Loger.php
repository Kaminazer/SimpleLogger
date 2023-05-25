<?php

namespace Logging;

require_once __DIR__."/../vendor/autoload.php";

use Psr\Log\LogLevel;
use Logging\Formatter;
use Logging\FileWriter;
use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{
    protected string $fileName;
    protected $writer;
    public function __construct(WriterInterface $writer)
    {
        $this->writer = $writer;
    }

    public function log($level, \Stringable|string $message, array $context = []): void
    {
        $message = $this->writer->formatter->format($level, $message, $context);
        $this->writer->write($message);
    }
}
