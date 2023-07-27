<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets support information for the given user; for Telegram support only
 */
class SetUserSupportInfo extends TdFunction
{
    public const TYPE_NAME = 'setUserSupportInfo';

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    /**
     * New information message
     *
     * @var FormattedText
     */
    protected FormattedText $message;

    public function __construct(int $userId, FormattedText $message)
    {
        $this->userId = $userId;
        $this->message = $message;
    }

    public static function fromArray(array $array): SetUserSupportInfo
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['message']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'message' => $this->message->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getMessage(): FormattedText
    {
        return $this->message;
    }
}
