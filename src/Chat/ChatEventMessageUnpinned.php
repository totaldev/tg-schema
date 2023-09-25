<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message was unpinned
 */
class ChatEventMessageUnpinned extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMessageUnpinned';

    /**
     * Unpinned message
     *
     * @var Message
     */
    protected Message $message;

    public function __construct(Message $message)
    {
        parent::__construct();

        $this->message = $message;
    }

    public static function fromArray(array $array): ChatEventMessageUnpinned
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
        );
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message' => $this->message->typeSerialize(),
        ];
    }
}
