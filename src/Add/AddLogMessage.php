<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds a message to TDLib internal log. Can be called synchronously.
 */
class AddLogMessage extends TdFunction
{
    public const TYPE_NAME = 'addLogMessage';

    public function __construct(
        /**
         * The minimum verbosity level needed for the message to be logged; 0-1023.
         */
        protected int    $verbosityLevel,
        /**
         * Text of a message to log.
         */
        protected string $text,
    ) {}

    public static function fromArray(array $array): AddLogMessage
    {
        return new static(
            $array['verbosity_level'],
            $array['text'],
        );
    }

    public function getText(): string
    {
        return $this->text;
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
            'text'            => $this->text,
        ];
    }
}
