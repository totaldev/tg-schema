<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message auto-delete or self-destruct timer setting for a chat was changed
 */
class UpdateChatMessageAutoDeleteTime extends Update
{
    public const TYPE_NAME = 'updateChatMessageAutoDeleteTime';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New value of message_auto_delete_time
     *
     * @var int
     */
    protected int $messageAutoDeleteTime;

    public function __construct(int $chatId, int $messageAutoDeleteTime)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;
    }

    public static function fromArray(array $array): UpdateChatMessageAutoDeleteTime
    {
        return new static(
            $array['chat_id'],
            $array['message_auto_delete_time'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_auto_delete_time' => $this->messageAutoDeleteTime,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }
}
