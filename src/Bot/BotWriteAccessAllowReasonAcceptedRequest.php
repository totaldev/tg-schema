<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

/**
 * The user accepted bot's request to send messages with allowBotToSendMessages.
 */
class BotWriteAccessAllowReasonAcceptedRequest extends BotWriteAccessAllowReason
{
    public const TYPE_NAME = 'botWriteAccessAllowReasonAcceptedRequest';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BotWriteAccessAllowReasonAcceptedRequest
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
