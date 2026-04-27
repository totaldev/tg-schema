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
    public const string TYPE_NAME = 'reorderActiveUsernames';

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
            usernames: $array['usernames'],
        );
    }

    public function getUsernames(): array
    {
        return $this->usernames;
    }

    public function setUsernames(array $value): static
    {
        $this->usernames = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'usernames' => $this->usernames,
        ];
    }
}
