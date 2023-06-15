<?php

namespace Logging;

interface FormatterInterface
{
    function format ($level, string $message, array $context = []);
}