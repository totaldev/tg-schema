<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Chat\ChatLocation;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the location of a chat. Available only for some location-based supergroups, use supergroupFullInfo.can_set_location to check whether the method is
 * allowed to use.
 */
class SetChatLocation extends TdFunction
{
    public const string TYPE_NAME = 'setChatLocation';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int          $chatId,
        /**
         * New location for the chat; must be valid and not null.
         */
        protected ChatLocation $location,
    ) {}

    public static function fromArray(array $array): SetChatLocation
    {
        return new static(
            chatId  : $array['chat_id'],
            location: TdSchemaRegistry::fromArray($array['location']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLocation(): ChatLocation
    {
        return $this->location;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setLocation(ChatLocation $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'location' => $this->location->jsonSerialize(),
        ];
    }
}
