<?php

namespace Logging;

class Formatter implements FormatterInterface
{
    public function format ($level, string $message, array $context = [])
    {
        $formatLevel = ucfirst($level);
        if (!empty ($context)) {
            $contextLine = "";
            foreach ($context as $item => $value)
            {
                $contextLine .= "$item : $value, ";
            }
            $formatContext = trim($contextLine, ", ");
        } else {
            return date('Y-m-d H:i:s')." - ". $formatLevel. " : " . $message. PHP_EOL;
        }
        return date('Y-m-d H:i:s')." - ". $formatLevel. " : " . $message. " :: ".$formatContext. PHP_EOL;
    }
}