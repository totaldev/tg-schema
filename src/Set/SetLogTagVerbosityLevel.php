<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets the verbosity level for a specified TDLib internal log tag. Can be called synchronously.
 */
class SetLogTagVerbosityLevel extends TdFunction
{
    public const TYPE_NAME = 'setLogTagVerbosityLevel';

    public function __construct(
        /**
         * Logging tag to change verbosity level.
         */
        protected string $tag,
        /**
         * New verbosity level; 1-1024.
         */
        protected int    $newVerbosityLevel,
    ) {}

    public static function fromArray(array $array): SetLogTagVerbosityLevel
    {
        return new static(
            $array['tag'],
            $array['new_verbosity_level'],
        );
    }

    public function getNewVerbosityLevel(): int
    {
        return $this->newVerbosityLevel;
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'tag'                 => $this->tag,
            'new_verbosity_level' => $this->newVerbosityLevel,
        ];
    }
}
