<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Log;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a TDLib internal log verbosity level.
 */
class LogVerbosityLevel extends TdObject
{
    public const TYPE_NAME = 'logVerbosityLevel';

    public function __construct(
        /**
         * Log verbosity level.
         */
        protected int $verbosityLevel
    ) {}

    public static function fromArray(array $array): LogVerbosityLevel
    {
        return new static(
            $array['verbosity_level'],
        );
    }

    public function getVerbosityLevel(): int
    {
        return $this->verbosityLevel;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'verbosity_level' => $this->verbosityLevel,
        ];
    }
}
