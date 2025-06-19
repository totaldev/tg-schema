<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Affiliate;

use Totaldev\TgSchema\Star\StarAmount;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about an affiliate that received commission from a Telegram Star transaction.
 */
class AffiliateInfo extends TdObject
{
    public const TYPE_NAME = 'affiliateInfo';

    public function __construct(
        /**
         * The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner.
         */
        protected int        $commissionPerMille,
        /**
         * Identifier of the chat which received the commission.
         */
        protected int        $affiliateChatId,
        /**
         * The amount of Telegram Stars that were received by the affiliate; can be negative for refunds.
         */
        protected StarAmount $starAmount
    ) {}

    public static function fromArray(array $array): AffiliateInfo
    {
        return new static(
            $array['commission_per_mille'],
            $array['affiliate_chat_id'],
            TdSchemaRegistry::fromArray($array['star_amount']),
        );
    }

    public function getAffiliateChatId(): int
    {
        return $this->affiliateChatId;
    }

    public function getCommissionPerMille(): int
    {
        return $this->commissionPerMille;
    }

    public function getStarAmount(): StarAmount
    {
        return $this->starAmount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'commission_per_mille' => $this->commissionPerMille,
            'affiliate_chat_id'    => $this->affiliateChatId,
            'star_amount'          => $this->starAmount->typeSerialize(),
        ];
    }
}
