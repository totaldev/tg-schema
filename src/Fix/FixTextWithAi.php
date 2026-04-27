<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Fix;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Fixes text using an AI model; must not be used in secret chats. May return an error with a message "AICOMPOSE_FLOOD_PREMIUM" if Telegram Premium is required
 * to send further requests.
 */
class FixTextWithAi extends TdFunction
{
    public const string TYPE_NAME = 'fixTextWithAi';

    public function __construct(
        /**
         * The original text.
         */
        protected FormattedText $text
    ) {}

    public static function fromArray(array $array): FixTextWithAi
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
