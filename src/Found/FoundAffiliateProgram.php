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
    public const string TYPE_NAME = 'foundAffiliateProgram';

    public function __construct(
        /**
         * User identifier of the bot created the program.
         */
        protected int                  $botUserId,
        /**
         * Information about the affiliate program.
         */
        protected AffiliateProgramInfo $info,
    ) {}

    public static function fromArray(array $array): FoundAffiliateProgram
    {
        return new static(
            botUserId: $array['bot_user_id'],
            info     : TdSchemaRegistry::fromArray($array['info']),
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

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setInfo(AffiliateProgramInfo $value): static
    {
        $this->info = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'info'        => $this->info->jsonSerialize(),
        ];
    }
}
