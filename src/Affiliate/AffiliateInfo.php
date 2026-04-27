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
    public const string TYPE_NAME = 'affiliateInfo';

    public function __construct(
        /**
         * Identifier of the chat which received the commission.
         */
        protected int        $affiliateChatId,
        /**
         * The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner.
         */
        protected int        $commissionPerMille,
        /**
         * The Telegram Star amount that was received by the affiliate; can be negative for refunds.
         */
        protected StarAmount $starAmount,
    ) {}

    public static function fromArray(array $array): AffiliateInfo
    {
        return new static(
            affiliateChatId   : $array['affiliate_chat_id'],
            commissionPerMille: $array['commission_per_mille'],
            starAmount        : TdSchemaRegistry::fromArray($array['star_amount']),
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

    public function setAffiliateChatId(int $value): static
    {
        $this->affiliateChatId = $value;

        return $this;
    }

    public function setCommissionPerMille(int $value): static
    {
        $this->commissionPerMille = $value;

        return $this;
    }

    public function setStarAmount(StarAmount $value): static
    {
        $this->starAmount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'affiliate_chat_id'    => $this->affiliateChatId,
            'commission_per_mille' => $this->commissionPerMille,
            'star_amount'          => $this->starAmount->jsonSerialize(),
        ];
    }
}
