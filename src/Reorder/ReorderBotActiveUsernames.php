<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes order of active usernames of a bot. Can be called only if userTypeBot.can_be_edited == true.
 */
class ReorderBotActiveUsernames extends TdFunction
{
    public const string TYPE_NAME = 'reorderBotActiveUsernames';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int   $botUserId,
        /**
         * The new order of active usernames. All currently active usernames must be specified.
         *
         * @var string[]
         */
        protected array $usernames,
    ) {}

    public static function fromArray(array $array): ReorderBotActiveUsernames
    {
        return new static(
            botUserId: $array['bot_user_id'],
            usernames: $array['usernames'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getUsernames(): array
    {
        return $this->usernames;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setUsernames(array $value): static
    {
        $this->usernames = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'usernames'   => $this->usernames,
        ];
    }
}
