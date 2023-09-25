<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The current user shared a user, which was requested by the bot
 */
class MessageUserShared extends MessageContent
{
    public const TYPE_NAME = 'messageUserShared';

    /**
     * Identifier of the shared user
     *
     * @var int
     */
    protected int $userId;

    /**
     * Identifier of the keyboard button with the request
     *
     * @var int
     */
    protected int $buttonId;

    public function __construct(int $userId, int $buttonId)
    {
        parent::__construct();

        $this->userId = $userId;
        $this->buttonId = $buttonId;
    }

    public static function fromArray(array $array): MessageUserShared
    {
        return new static(
            $array['user_id'],
            $array['button_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'button_id' => $this->buttonId,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getButtonId(): int
    {
        return $this->buttonId;
    }
}
