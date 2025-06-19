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
    public const TYPE_NAME = 'updateChatBoost';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int       $chatId,
        /**
         * New information about the boost.
         */
        protected ChatBoost $boost
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatBoost
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['boost']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'boost'   => $this->boost->typeSerialize(),
        ];
    }
}
