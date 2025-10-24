<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputChatPhoto;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the photo of a chat. Supported only for basic groups, supergroups and channels. Requires can_change_info member right.
 */
class SetChatPhoto extends TdFunction
{
    public const string TYPE_NAME = 'setChatPhoto';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int             $chatId,
        /**
         * New chat photo; pass null to delete the chat photo.
         */
        protected ?InputChatPhoto $photo = null,
    ) {}

    public static function fromArray(array $array): SetChatPhoto
    {
        return new static(
            $array['chat_id'],
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPhoto(): ?InputChatPhoto
    {
        return $this->photo;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setPhoto(?InputChatPhoto $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'photo'   => $this->photo ?? null,
        ];
    }
}
