<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes order of active usernames of a supergroup or channel, requires owner privileges in the supergroup or channel
 */
class ReorderSupergroupActiveUsernames extends TdFunction
{
    public const TYPE_NAME = 'reorderSupergroupActiveUsernames';

    /**
     * Identifier of the supergroup or channel
     *
     * @var int
     */
    protected int $supergroupId;

    /**
     * The new order of active usernames. All currently active usernames must be specified
     *
     * @var string[]
     */
    protected array $usernames;

    public function __construct(int $supergroupId, array $usernames)
    {
        $this->supergroupId = $supergroupId;
        $this->usernames = $usernames;
    }

    public static function fromArray(array $array): ReorderSupergroupActiveUsernames
    {
        return new static(
            $array['supergroup_id'],
            $array['usernames'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'usernames' => $this->usernames,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getUsernames(): array
    {
        return $this->usernames;
    }
}
