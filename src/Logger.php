<?php

namespace Logging;

use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{
    protected WriterInterface $writer;
    public function __construct(WriterInterface $writer)
    {
        $this->writer = $writer;
    }

    public function log($level, \Stringable|string $message, array $context = []): void
    {
        $this->writer->write($level, $message, $context);
    }
}
