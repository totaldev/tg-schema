<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a URL for Telegram Star withdrawal.
 */
class GetStarWithdrawalUrl extends TdFunction
{
    public const TYPE_NAME = 'getStarWithdrawalUrl';

    public function __construct(
        /**
         * Identifier of the owner of the Telegram Stars; can be identifier of an owned bot, or identifier of an owned channel chat.
         */
        protected MessageSender $ownerId,
        /**
         * The number of Telegram Stars to withdraw. Must be at least getOption("star_withdrawal_count_min").
         */
        protected int           $starCount,
        /**
         * The 2-step verification password of the current user.
         */
        protected string        $password,
    ) {}

    public static function fromArray(array $array): GetStarWithdrawalUrl
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            $array['star_count'],
            $array['password'],
        );
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'owner_id'   => $this->ownerId->typeSerialize(),
            'star_count' => $this->starCount,
            'password'   => $this->password,
        ];
    }
}
