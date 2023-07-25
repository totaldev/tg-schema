<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Disables all active non-editable usernames of a supergroup or channel, requires owner privileges in the supergroup or channel
 */
class DisableAllSupergroupUsernames extends TdFunction
{
    public const TYPE_NAME = 'disableAllSupergroupUsernames';

    /**
     * Identifier of the supergroup or channel
     *
     * @var int
     */
    protected int $supergroupId;

    public function __construct(int $supergroupId)
    {
        $this->supergroupId = $supergroupId;
    }

    public static function fromArray(array $array): DisableAllSupergroupUsernames
    {
        return new static(
            $array['supergroup_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }
}
