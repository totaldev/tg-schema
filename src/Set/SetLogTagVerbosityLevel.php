<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets the verbosity level for a specified TDLib internal log tag. Can be called synchronously
 */
class SetLogTagVerbosityLevel extends TdFunction
{
    public const TYPE_NAME = 'setLogTagVerbosityLevel';

    /**
     * New verbosity level; 1-1024
     *
     * @var int
     */
    protected int $newVerbosityLevel;

    /**
     * Logging tag to change verbosity level
     *
     * @var string
     */
    protected string $tag;

    public function __construct(string $tag, int $newVerbosityLevel)
    {
        $this->tag = $tag;
        $this->newVerbosityLevel = $newVerbosityLevel;
    }

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
            '@type' => static::TYPE_NAME,
            'tag' => $this->tag,
            'new_verbosity_level' => $this->newVerbosityLevel,
        ];
    }
}
