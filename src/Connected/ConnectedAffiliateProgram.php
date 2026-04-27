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
    public const string TYPE_NAME = 'connectedAffiliateProgram';

    public function __construct(
        /**
         * User identifier of the bot created the program.
         */
        protected int                        $botUserId,
        /**
         * Point in time (Unix timestamp) when the affiliate program was connected.
         */
        protected int                        $connectionDate,
        /**
         * True, if the program was canceled by the bot, or disconnected by the chat owner and isn't available anymore.
         */
        protected bool                       $isDisconnected,
        /**
         * The parameters of the affiliate program.
         */
        protected AffiliateProgramParameters $parameters,
        /**
         * The number of Telegram Stars that were earned by the affiliate program.
         */
        protected int                        $revenueStarCount,
        /**
         * The link that can be used to refer users if the program is still active.
         */
        protected string                     $url,
        /**
         * The number of users that used the affiliate program.
         */
        protected int                        $userCount,
    ) {}

    public static function fromArray(array $array): ConnectedAffiliateProgram
    {
        return new static(
            botUserId       : $array['bot_user_id'],
            connectionDate  : $array['connection_date'],
            isDisconnected  : $array['is_disconnected'],
            parameters      : TdSchemaRegistry::fromArray($array['parameters']),
            revenueStarCount: $array['revenue_star_count'],
            url             : $array['url'],
            userCount       : $array['user_count'],
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

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setConnectionDate(int $value): static
    {
        $this->connectionDate = $value;

        return $this;
    }

    public function setIsDisconnected(bool $value): static
    {
        $this->isDisconnected = $value;

        return $this;
    }

    public function setParameters(AffiliateProgramParameters $value): static
    {
        $this->parameters = $value;

        return $this;
    }

    public function setRevenueStarCount(int $value): static
    {
        $this->revenueStarCount = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function setUserCount(int $value): static
    {
        $this->userCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'bot_user_id'        => $this->botUserId,
            'connection_date'    => $this->connectionDate,
            'is_disconnected'    => $this->isDisconnected,
            'parameters'         => $this->parameters->jsonSerialize(),
            'revenue_star_count' => $this->revenueStarCount,
            'url'                => $this->url,
            'user_count'         => $this->userCount,
        ];
    }
}
