<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Paid media were purchased by a user; for bots only.
 */
class UpdatePaidMediaPurchased extends Update
{
    public const TYPE_NAME = 'updatePaidMediaPurchased';

    public function __construct(
        /**
         * User identifier.
         */
        protected int    $userId,
        /**
         * Bot-specified payload for the paid media.
         */
        protected string $payload,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdatePaidMediaPurchased
    {
        return new static(
            $array['user_id'],
            $array['payload'],
        );
    }

    public function getPayload(): string
    {
        return $this->payload;
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
            'payload' => $this->payload,
        ];
    }
}
