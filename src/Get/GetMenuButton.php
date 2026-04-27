<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns menu button set by the bot for the given user; for bots only.
 */
class GetMenuButton extends TdFunction
{
    public const string TYPE_NAME = 'getMenuButton';

    public function __construct(
        /**
         * Identifier of the user or 0 to get the default menu button.
         */
        protected int $userId
    ) {}

    public static function fromArray(array $array): GetMenuButton
    {
        return new static(
            userId: $array['user_id'],
        );
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
        ];
    }
}
