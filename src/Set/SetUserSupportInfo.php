<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets support information for the given user; for Telegram support only.
 */
class SetUserSupportInfo extends TdFunction
{
    public const TYPE_NAME = 'setUserSupportInfo';

    public function __construct(
        /**
         * User identifier.
         */
        protected int           $userId,
        /**
         * New information message.
         */
        protected FormattedText $message
    ) {}

    public static function fromArray(array $array): SetUserSupportInfo
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['message']),
        );
    }

    public function getMessage(): FormattedText
    {
        return $this->message;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
            'message' => $this->message->typeSerialize(),
        ];
    }
}
