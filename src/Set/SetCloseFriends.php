<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the list of close friends of the current user
 */
class SetCloseFriends extends TdFunction
{
    public const TYPE_NAME = 'setCloseFriends';

    /**
     * User identifiers of close friends; the users must be contacts of the current user
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(array $userIds)
    {
        $this->userIds = $userIds;
    }

    public static function fromArray(array $array): SetCloseFriends
    {
        return new static(
            $array['user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_ids' => $this->userIds,
        ];
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }
}
