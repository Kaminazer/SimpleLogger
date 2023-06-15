<?php

namespace Logging;

class FileWriter implements WriterInterface
{
    protected string $fileName;
    protected $formatter;
    public function __construct($fileName, FormatterInterface $formatter)
    {
        $this->fileName = $fileName;
        $this->formatter = $formatter;
    }
    public function write ($level, string $message, array $context = []):void
    {
        $message = $this->formatter->format($level, $message, $context = []);
        file_put_contents($this->fileName, $message, FILE_APPEND);
    }
}