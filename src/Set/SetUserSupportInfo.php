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
    public const string TYPE_NAME = 'setUserSupportInfo';

    public function __construct(
        /**
         * New information message.
         */
        protected FormattedText $message,
        /**
         * User identifier.
         */
        protected int           $userId,
    ) {}

    public static function fromArray(array $array): SetUserSupportInfo
    {
        return new static(
            message: TdSchemaRegistry::fromArray($array['message']),
            userId : $array['user_id'],
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

    public function setMessage(FormattedText $value): static
    {
        $this->message = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'message' => $this->message->jsonSerialize(),
            'user_id' => $this->userId,
        ];
    }
}
