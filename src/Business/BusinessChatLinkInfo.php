<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a business chat link.
 */
class BusinessChatLinkInfo extends TdObject
{
    public const TYPE_NAME = 'businessChatLinkInfo';

    public function __construct(
        /**
         * Identifier of the private chat that created the link.
         */
        protected int           $chatId,
        /**
         * Message draft text that must be added to the input field.
         */
        protected FormattedText $text
    ) {}

    public static function fromArray(array $array): BusinessChatLinkInfo
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'text'    => $this->text->typeSerialize(),
        ];
    }
}
