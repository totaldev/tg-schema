<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes order of active usernames of a bot. Can be called only if userTypeBot.can_be_edited == true
 */
class ReorderBotActiveUsernames extends TdFunction
{
    public const TYPE_NAME = 'reorderBotActiveUsernames';

    /**
     * Identifier of the target bot
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * The new order of active usernames. All currently active usernames must be specified
     *
     * @var string[]
     */
    protected array $usernames;

    public function __construct(int $botUserId, array $usernames)
    {
        $this->botUserId = $botUserId;
        $this->usernames = $usernames;
    }

    public static function fromArray(array $array): ReorderBotActiveUsernames
    {
        return new static(
            $array['bot_user_id'],
            $array['usernames'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'usernames' => $this->usernames,
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getUsernames(): array
    {
        return $this->usernames;
    }
}
