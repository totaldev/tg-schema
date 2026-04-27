<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes one answer option of a poll to be created.
 */
class InputPollOption extends TdObject
{
    public const string TYPE_NAME = 'inputPollOption';

    public function __construct(
        /**
         * Option text; 1-100 characters. Only custom emoji entities are allowed to be added and only by Premium users.
         */
        protected FormattedText $text
    ) {}

    public static function fromArray(array $array): InputPollOption
    {
        return new static(
            text: TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text->jsonSerialize(),
        ];
    }
}
