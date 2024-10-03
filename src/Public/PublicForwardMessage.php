<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Public;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a public forward as a message.
 */
class PublicForwardMessage extends PublicForward
{
    public const TYPE_NAME = 'publicForwardMessage';

    public function __construct(
        /**
         * Information about the message.
         */
        protected Message $message
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PublicForwardMessage
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
            '@type'   => static::TYPE_NAME,
            'message' => $this->message->typeSerialize(),
        ];
    }
}
