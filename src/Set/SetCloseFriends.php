<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the list of close friends of the current user.
 */
class SetCloseFriends extends TdFunction
{
    public const string TYPE_NAME = 'setCloseFriends';

    public function __construct(
        /**
         * User identifiers of close friends; the users must be contacts of the current user.
         *
         * @var int[]
         */
        protected array $userIds
    ) {}

    public static function fromArray(array $array): SetCloseFriends
    {
        return new static(
            userIds: $array['user_ids'],
        );
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function setUserIds(array $value): static
    {
        $this->userIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'user_ids' => $this->userIds,
        ];
    }
}
