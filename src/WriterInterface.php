<?php

namespace Logging;

interface WriterInterface
{
    function write ($level, string $message, array $context = []):void;
}