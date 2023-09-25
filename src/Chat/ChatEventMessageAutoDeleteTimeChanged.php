<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message auto-delete timer was changed
 */
class ChatEventMessageAutoDeleteTimeChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMessageAutoDeleteTimeChanged';

    /**
     * New value of message_auto_delete_time
     *
     * @var int
     */
    protected int $newMessageAutoDeleteTime;

    /**
     * Previous value of message_auto_delete_time
     *
     * @var int
     */
    protected int $oldMessageAutoDeleteTime;

    public function __construct(int $oldMessageAutoDeleteTime, int $newMessageAutoDeleteTime)
    {
        parent::__construct();

        $this->oldMessageAutoDeleteTime = $oldMessageAutoDeleteTime;
        $this->newMessageAutoDeleteTime = $newMessageAutoDeleteTime;
    }

    public static function fromArray(array $array): ChatEventMessageAutoDeleteTimeChanged
    {
        return new static(
            $array['old_message_auto_delete_time'],
            $array['new_message_auto_delete_time'],
        );
    }

    public function getNewMessageAutoDeleteTime(): int
    {
        return $this->newMessageAutoDeleteTime;
    }

    public function getOldMessageAutoDeleteTime(): int
    {
        return $this->oldMessageAutoDeleteTime;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_message_auto_delete_time' => $this->oldMessageAutoDeleteTime,
            'new_message_auto_delete_time' => $this->newMessageAutoDeleteTime,
        ];
    }
}
