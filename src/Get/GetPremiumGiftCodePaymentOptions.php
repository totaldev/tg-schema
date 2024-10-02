<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns available options for Telegram Premium gift code or Telegram Premium giveaway creation.
 */
class GetPremiumGiftCodePaymentOptions extends TdFunction
{
    public const TYPE_NAME = 'getPremiumGiftCodePaymentOptions';

    public function __construct(
        /**
         * Identifier of the supergroup or channel chat, which will be automatically boosted by receivers of the gift codes and which is administered by the user; 0 if none.
         */
        protected int $boostedChatId
    ) {}

    public static function fromArray(array $array): GetPremiumGiftCodePaymentOptions
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
