<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains default auto-delete timer setting for new chats
 */
class MessageAutoDeleteTime extends TdObject
{
    public const TYPE_NAME = 'messageAutoDeleteTime';

    /**
     * Message auto-delete time, in seconds. If 0, then messages aren't deleted automatically
     *
     * @var int
     */
    protected int $time;

    public function __construct(int $time)
    {
        $this->time = $time;
    }

    public static function fromArray(array $array): MessageAutoDeleteTime
    {
        return new static(
            $array['time'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'time' => $this->time,
        ];
    }

    public function getTime(): int
    {
        return $this->time;
    }
}
