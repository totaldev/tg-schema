<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes order of active usernames of the current user
 */
class ReorderActiveUsernames extends TdFunction
{
    public const TYPE_NAME = 'reorderActiveUsernames';

    /**
     * The new order of active usernames. All currently active usernames must be specified
     *
     * @var string[]
     */
    protected array $usernames;

    public function __construct(array $usernames)
    {
        $this->usernames = $usernames;
    }

    public static function fromArray(array $array): ReorderActiveUsernames
    {
        return new static(
            $array['usernames'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'usernames' => $this->usernames,
        ];
    }

    public function getUsernames(): array
    {
        return $this->usernames;
    }
}
