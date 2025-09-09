<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes order of active usernames of the current user.
 */
class ReorderActiveUsernames extends TdFunction
{
    public const TYPE_NAME = 'reorderActiveUsernames';

    public function __construct(
        /**
         * The new order of active usernames. All currently active usernames must be specified.
         *
         * @var string[]
         */
        protected array $usernames
    ) {}

    public static function fromArray(array $array): ReorderActiveUsernames
    {
        return new static(
            $array['usernames'],
        );
    }

    public function getUsernames(): array
    {
        return $this->usernames;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'usernames' => $this->usernames,
        ];
    }
}
