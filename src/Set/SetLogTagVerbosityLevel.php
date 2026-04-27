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
    public const string TYPE_NAME = 'setLogTagVerbosityLevel';

    public function __construct(
        /**
         * New verbosity level; 1-1024.
         */
        protected int    $newVerbosityLevel,
        /**
         * Logging tag to change verbosity level.
         */
        protected string $tag,
    ) {}

    public static function fromArray(array $array): SetLogTagVerbosityLevel
    {
        return new static(
            newVerbosityLevel: $array['new_verbosity_level'],
            tag              : $array['tag'],
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

    public function setNewVerbosityLevel(int $value): static
    {
        $this->newVerbosityLevel = $value;

        return $this;
    }

    public function setTag(string $value): static
    {
        $this->tag = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'new_verbosity_level' => $this->newVerbosityLevel,
            'tag'                 => $this->tag,
        ];
    }
}
