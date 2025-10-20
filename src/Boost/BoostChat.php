<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Boost;

use Totaldev\TgSchema\TdFunction;

/**
 * Boosts a chat and returns the list of available chat boost slots for the current user after the boost.
 */
class BoostChat extends TdFunction
{
    public const TYPE_NAME = 'boostChat';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int   $chatId,
        /**
         * Identifiers of boost slots of the current user from which to apply boosts to the chat.
         *
         * @var int[]
         */
        protected array $slotIds,
    ) {}

    public static function fromArray(array $array): BoostChat
    {
        return new static(
            $array['chat_id'],
            $array['slot_ids'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSlotIds(): array
    {
        return $this->slotIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'slot_ids' => $this->slotIds,
        ];
    }
}
