<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Affiliate\AffiliateType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns an affiliate program that were connected to the given affiliate by identifier of the bot that created the program.
 */
class GetConnectedAffiliateProgram extends TdFunction
{
    public const TYPE_NAME = 'getConnectedAffiliateProgram';

    public function __construct(
        /**
         * The affiliate to which the affiliate program will be connected.
         */
        protected AffiliateType $affiliate,
        /**
         * Identifier of the bot that created the program.
         */
        protected int           $botUserId
    ) {}

    public static function fromArray(array $array): GetConnectedAffiliateProgram
    {
        return new static(
            TdSchemaRegistry::fromArray($array['affiliate']),
            $array['bot_user_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'affiliate'   => $this->affiliate->typeSerialize(),
            'bot_user_id' => $this->botUserId,
        ];
    }
}
