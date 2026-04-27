<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a globally unique push receiver identifier, which can be used to identify which account has received a push notification.
 */
class PushReceiverId extends TdObject
{
    public const string TYPE_NAME = 'pushReceiverId';

    public function __construct(
        /**
         * The globally unique identifier of push notification subscription.
         */
        protected int $id
    ) {}

    public static function fromArray(array $array): PushReceiverId
    {
        return new static(
            id: $array['id'],
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id'    => $this->id,
        ];
    }
}
