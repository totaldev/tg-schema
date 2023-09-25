<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message will be self-destructed in the specified time after its content was opened
 */
class MessageSelfDestructTypeTimer extends MessageSelfDestructType
{
    public const TYPE_NAME = 'messageSelfDestructTypeTimer';

    /**
     * The message's self-destruct time, in seconds; must be between 0 and 60 in private chats
     *
     * @var int
     */
    protected int $selfDestructTime;

    public function __construct(int $selfDestructTime)
    {
        parent::__construct();

        $this->selfDestructTime = $selfDestructTime;
    }

    public static function fromArray(array $array): MessageSelfDestructTypeTimer
    {
        return new static(
            $array['self_destruct_time'],
        );
    }

    public function getSelfDestructTime(): int
    {
        return $this->selfDestructTime;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'self_destruct_time' => $this->selfDestructTime,
        ];
    }
}
