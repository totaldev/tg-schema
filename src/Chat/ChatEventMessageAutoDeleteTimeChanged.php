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
    public const string TYPE_NAME = 'chatEventMessageAutoDeleteTimeChanged';

    public function __construct(
        /**
         * New value of message_auto_delete_time.
         */
        protected int $newMessageAutoDeleteTime,
        /**
         * Previous value of message_auto_delete_time.
         */
        protected int $oldMessageAutoDeleteTime,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMessageAutoDeleteTimeChanged
    {
        return new static(
            newMessageAutoDeleteTime: $array['new_message_auto_delete_time'],
            oldMessageAutoDeleteTime: $array['old_message_auto_delete_time'],
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

    public function setNewMessageAutoDeleteTime(int $value): static
    {
        $this->newMessageAutoDeleteTime = $value;

        return $this;
    }

    public function setOldMessageAutoDeleteTime(int $value): static
    {
        $this->oldMessageAutoDeleteTime = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                        => static::TYPE_NAME,
            'new_message_auto_delete_time' => $this->newMessageAutoDeleteTime,
            'old_message_auto_delete_time' => $this->oldMessageAutoDeleteTime,
        ];
    }
}
