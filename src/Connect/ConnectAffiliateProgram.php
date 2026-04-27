<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Connect;

use Totaldev\TgSchema\Affiliate\AffiliateType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Connects an affiliate program to the given affiliate. Returns information about the connected affiliate program.
 */
class ConnectAffiliateProgram extends TdFunction
{
    public const string TYPE_NAME = 'connectAffiliateProgram';

    public function __construct(
        /**
         * The affiliate to which the affiliate program will be connected.
         */
        protected AffiliateType $affiliate,
        /**
         * Identifier of the bot, which affiliate program is connected.
         */
        protected int           $botUserId,
    ) {}

    public static function fromArray(array $array): ConnectAffiliateProgram
    {
        return new static(
            affiliate: TdSchemaRegistry::fromArray($array['affiliate']),
            botUserId: $array['bot_user_id'],
        );
    }

    public function getAffiliate(): AffiliateType
    {
        return $this->affiliate;
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function setAffiliate(AffiliateType $value): static
    {
        $this->affiliate = $value;

        return $this;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'affiliate'   => $this->affiliate->jsonSerialize(),
            'bot_user_id' => $this->botUserId,
        ];
    }
}
