<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns token of a created bot; for bots only.
 */
class GetBotToken extends TdFunction
{
    public const string TYPE_NAME = 'getBotToken';

    public function __construct(
        /**
         * Identifier of the created bot.
         */
        protected int  $botUserId,
        /**
         * Pass true to revoke the current token and create a new one.
         */
        protected bool $revoke,
    ) {}

    public static function fromArray(array $array): GetBotToken
    {
        return new static(
            botUserId: $array['bot_user_id'],
            revoke   : $array['revoke'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getRevoke(): bool
    {
        return $this->revoke;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setRevoke(bool $value): static
    {
        $this->revoke = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'revoke'      => $this->revoke,
        ];
    }
}
