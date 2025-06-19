<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\Affiliate\AffiliateProgramInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a found affiliate program.
 */
class FoundAffiliateProgram extends TdObject
{
    public const TYPE_NAME = 'foundAffiliateProgram';

    public function __construct(
        /**
         * User identifier of the bot created the program.
         */
        protected int                  $botUserId,
        /**
         * Information about the affiliate program.
         */
        protected AffiliateProgramInfo $info
    ) {}

    public static function fromArray(array $array): FoundAffiliateProgram
    {
        return new static(
            $array['bot_user_id'],
            TdSchemaRegistry::fromArray($array['info']),
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getInfo(): AffiliateProgramInfo
    {
        return $this->info;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'info'        => $this->info->typeSerialize(),
        ];
    }
}
