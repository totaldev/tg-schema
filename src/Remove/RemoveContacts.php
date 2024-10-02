<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes users from the contact list.
 */
class RemoveContacts extends TdFunction
{
    public const TYPE_NAME = 'removeContacts';

    public function __construct(
        /**
         * Identifiers of users to be deleted.
         *
         * @var int[]
         */
        protected array $userIds
    ) {}

    public static function fromArray(array $array): RemoveContacts
    {
        return new static(
            $array['user_ids'],
        );
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'user_ids' => $this->userIds,
        ];
    }
}
