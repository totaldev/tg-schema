<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Describes earnings from a published suggested post.
 */
class ChatRevenueTransactionTypeSuggestedPostEarnings extends ChatRevenueTransactionType
{
    public const string TYPE_NAME = 'chatRevenueTransactionTypeSuggestedPostEarnings';

    public function __construct(
        /**
         * Identifier of the user that paid for the suggested post.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatRevenueTransactionTypeSuggestedPostEarnings
    {
        return new static(
            userId: $array['user_id'],
        );
    }

    public function getUserId(): int
    {
        return $this->userId;
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
            'user_id' => $this->userId,
        ];
    }
}
