<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Bot\BotWriteAccessAllowReason;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user allowed the bot to send messages.
 */
class MessageBotWriteAccessAllowed extends MessageContent
{
    public const TYPE_NAME = 'messageBotWriteAccessAllowed';

    public function __construct(
        /**
         * The reason why the bot was allowed to write messages.
         */
        protected BotWriteAccessAllowReason $reason
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageBotWriteAccessAllowed
    {
        return new static(
            TdSchemaRegistry::fromArray($array['reason']),
        );
    }

    public function getReason(): BotWriteAccessAllowReason
    {
        return $this->reason;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'reason' => $this->reason->typeSerialize(),
        ];
    }
}
