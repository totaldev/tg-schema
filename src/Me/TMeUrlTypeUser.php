<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Me;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A URL linking to a user
 */
class TMeUrlTypeUser extends TMeUrlType
{
    public const TYPE_NAME = 'tMeUrlTypeUser';

    /**
     * Identifier of the user
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId)
    {
        parent::__construct();

        $this->userId = $userId;
    }

    public static function fromArray(array $array): TMeUrlTypeUser
    {
        return new static(
            $array['user_id'],
        );
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
        ];
    }
}
