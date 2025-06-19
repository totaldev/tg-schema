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
    public const TYPE_NAME = 'chatFolderName';

    public function __construct(
        /**
         * The text of the chat folder name; 1-12 characters without line feeds. May contain only CustomEmoji entities.
         */
        protected FormattedText $text,
        /**
         * True, if custom emoji in the name must be animated.
         */
        protected bool          $animateCustomEmoji
    ) {}

    public static function fromArray(array $array): ChatFolderName
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['animate_custom_emoji'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'text'                 => $this->text->typeSerialize(),
            'animate_custom_emoji' => $this->animateCustomEmoji,
        ];
    }
}
