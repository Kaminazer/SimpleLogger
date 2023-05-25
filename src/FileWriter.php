<?php

namespace Logging;

class FileWriter implements WriterInterface
{
    protected string $fileName;
    public $formatter;
    public function __construct($fileName, FormatterInterface $formatter)
    {
        $this->fileName = $fileName;
        $this->formatter = $formatter;
    }
    public function write (string $message):void
    {
        file_put_contents($this->fileName, $message, FILE_APPEND);
    }
}