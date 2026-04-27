<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a bot that can be added to attachment or side menu.
 */
class GetAttachmentMenuBot extends TdFunction
{
    public const string TYPE_NAME = 'getAttachmentMenuBot';

    public function __construct(
        /**
         * Bot's user identifier.
         */
        protected int $botUserId
    ) {}

    public static function fromArray(array $array): GetAttachmentMenuBot
    {
        return new static(
            botUserId: $array['bot_user_id'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
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
            'bot_user_id' => $this->botUserId,
        ];
    }
}
