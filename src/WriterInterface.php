<?php

namespace Logging;

interface WriterInterface
{
    function write (string $message):void;
}