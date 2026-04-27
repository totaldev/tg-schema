<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatBoost;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat boost has changed; for bots only.
 */
class UpdateChatBoost extends Update
{
    public const string TYPE_NAME = 'updateChatBoost';

    public function __construct(
        /**
         * New information about the boost.
         */
        protected ChatBoost $boost,
        /**
         * Chat identifier.
         */
        protected int       $chatId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatBoost
    {
        return new static(
            boost : TdSchemaRegistry::fromArray($array['boost']),
            chatId: $array['chat_id'],
        );
    }

    public function getBoost(): ChatBoost
    {
        return $this->boost;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setBoost(ChatBoost $value): static
    {
        $this->boost = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'boost'   => $this->boost->jsonSerialize(),
            'chat_id' => $this->chatId,
        ];
    }
}
