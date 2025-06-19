<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Connected;

use Totaldev\TgSchema\Affiliate\AffiliateProgramParameters;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an affiliate program that was connected to an affiliate.
 */
class ConnectedAffiliateProgram extends TdObject
{
    public const TYPE_NAME = 'connectedAffiliateProgram';

    public function __construct(
        /**
         * The link that can be used to refer users if the program is still active.
         */
        protected string                     $url,
        /**
         * User identifier of the bot created the program.
         */
        protected int                        $botUserId,
        /**
         * The parameters of the affiliate program.
         */
        protected AffiliateProgramParameters $parameters,
        /**
         * Point in time (Unix timestamp) when the affiliate program was connected.
         */
        protected int                        $connectionDate,
        /**
         * True, if the program was canceled by the bot, or disconnected by the chat owner and isn't available anymore.
         */
        protected bool                       $isDisconnected,
        /**
         * The number of users that used the affiliate program.
         */
        protected int                        $userCount,
        /**
         * The number of Telegram Stars that were earned by the affiliate program.
         */
        protected int                        $revenueStarCount,
    ) {}

    public static function fromArray(array $array): ConnectedAffiliateProgram
    {
        return new static(
            $array['url'],
            $array['bot_user_id'],
            TdSchemaRegistry::fromArray($array['parameters']),
            $array['connection_date'],
            $array['is_disconnected'],
            $array['user_count'],
            $array['revenue_star_count'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getConnectionDate(): int
    {
        return $this->connectionDate;
    }

    public function getIsDisconnected(): bool
    {
        return $this->isDisconnected;
    }

    public function getParameters(): AffiliateProgramParameters
    {
        return $this->parameters;
    }

    public function getRevenueStarCount(): int
    {
        return $this->revenueStarCount;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getUserCount(): int
    {
        return $this->userCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'url'                => $this->url,
            'bot_user_id'        => $this->botUserId,
            'parameters'         => $this->parameters->typeSerialize(),
            'connection_date'    => $this->connectionDate,
            'is_disconnected'    => $this->isDisconnected,
            'user_count'         => $this->userCount,
            'revenue_star_count' => $this->revenueStarCount,
        ];
    }
}
