<?php

declare(strict_types=1);

namespace Yiisoft\Validator;

class Formatter implements FormatterInterface
{
    public function format(string $message, array $parameters = []): string
    {
        $replacements = [];
        foreach ($parameters as $key => $value) {
            if (is_array($value)) {
                $value = 'array';
            } elseif (is_object($value)) {
                $value = 'object';
            } elseif (is_resource($value)) {
                $value = 'resource';
            }
            $replacements['{' . $key . '}'] = $value;
        }
        return strtr($message, $replacements);
    }
}
