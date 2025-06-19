<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns available options for creating of Telegram Premium giveaway or manual distribution of Telegram Premium among chat members.
 */
class GetPremiumGiveawayPaymentOptions extends TdFunction
{
    public const TYPE_NAME = 'getPremiumGiveawayPaymentOptions';

    public function __construct(
        /**
         * Identifier of the supergroup or channel chat, which will be automatically boosted by receivers of the gift codes and which is administered by the user.
         */
        protected int $boostedChatId
    ) {}

    public static function fromArray(array $array): GetPremiumGiveawayPaymentOptions
    {
        return new static(
            $array['boosted_chat_id'],
        );
    }

    public function getBoostedChatId(): int
    {
        return $this->boostedChatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'boosted_chat_id' => $this->boostedChatId,
        ];
    }
}
