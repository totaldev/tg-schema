<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes name of a chat folder.
 */
class ChatFolderName extends TdObject
{
    public const string TYPE_NAME = 'chatFolderName';

    public function __construct(
        /**
         * True, if custom emoji in the name must be animated.
         */
        protected bool          $animateCustomEmoji,
        /**
         * The text of the chat folder name; 1-12 characters without line feeds. May contain only CustomEmoji entities.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): ChatFolderName
    {
        return new static(
            animateCustomEmoji: $array['animate_custom_emoji'],
            text              : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getAnimateCustomEmoji(): bool
    {
        return $this->animateCustomEmoji;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setAnimateCustomEmoji(bool $value): static
    {
        $this->animateCustomEmoji = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'animate_custom_emoji' => $this->animateCustomEmoji,
            'text'                 => $this->text->jsonSerialize(),
        ];
    }
}
