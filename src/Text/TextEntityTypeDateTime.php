<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\Date\DateTimeFormattingType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A date and time.
 */
class TextEntityTypeDateTime extends TextEntityType
{
    public const string TYPE_NAME = 'textEntityTypeDateTime';

    public function __construct(
        /**
         * Date and time formatting type; may be null if none and the original text must not be changed.
         */
        protected ?DateTimeFormattingType $formattingType,
        /**
         * Point in time (Unix timestamp) representing the date and time.
         */
        protected int                     $unixTime,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeDateTime
    {
        return new static(
            formattingType: (isset($array['formatting_type']) ? TdSchemaRegistry::fromArray($array['formatting_type']) : null),
            unixTime      : $array['unix_time'],
        );
    }

    public function getFormattingType(): ?DateTimeFormattingType
    {
        return $this->formattingType;
    }

    public function getUnixTime(): int
    {
        return $this->unixTime;
    }

    public function setFormattingType(?DateTimeFormattingType $value): static
    {
        $this->formattingType = $value;

        return $this;
    }

    public function setUnixTime(int $value): static
    {
        $this->unixTime = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'formatting_type' => (null !== $this->formattingType ? $this->formattingType->jsonSerialize() : null),
            'unix_time'       => $this->unixTime,
        ];
    }
}
