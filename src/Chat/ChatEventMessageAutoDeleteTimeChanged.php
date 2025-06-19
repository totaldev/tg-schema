<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The message auto-delete timer was changed.
 */
class ChatEventMessageAutoDeleteTimeChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMessageAutoDeleteTimeChanged';

    public function __construct(
        /**
         * Previous value of message_auto_delete_time.
         */
        protected int $oldMessageAutoDeleteTime,
        /**
         * New value of message_auto_delete_time.
         */
        protected int $newMessageAutoDeleteTime
    ) {
        parent::__construct();
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
            '@type'                        => static::TYPE_NAME,
            'old_message_auto_delete_time' => $this->oldMessageAutoDeleteTime,
            'new_message_auto_delete_time' => $this->newMessageAutoDeleteTime,
        ];
    }
}
