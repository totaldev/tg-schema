<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputChatPhoto;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes a profile photo for a bot.
 */
class SetBotProfilePhoto extends TdFunction
{
    public const string TYPE_NAME = 'setBotProfilePhoto';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int             $botUserId,
        /**
         * Profile photo to set; pass null to delete the chat photo.
         */
        protected ?InputChatPhoto $photo = null,
    ) {}

    public static function fromArray(array $array): SetBotProfilePhoto
    {
        return new static(
            botUserId: $array['bot_user_id'],
            photo    : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getPhoto(): ?InputChatPhoto
    {
        return $this->photo;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

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
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'photo'       => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
        ];
    }
}
