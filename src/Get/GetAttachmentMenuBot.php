<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a bot that can be added to attachment menu
 */
class GetAttachmentMenuBot extends TdFunction
{
    public const TYPE_NAME = 'getAttachmentMenuBot';

    /**
     * Bot's user identifier
     *
     * @var int
     */
    protected int $botUserId;

    public function __construct(int $botUserId)
    {
        $this->botUserId = $botUserId;
    }

    public static function fromArray(array $array): GetAttachmentMenuBot
    {
        return new static(
            $array['bot_user_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }
}
