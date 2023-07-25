<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Contains a list of chat invite link counts
 */
class ChatInviteLinkCounts extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinkCounts';

    /**
     * List of invite link counts
     *
     * @var ChatInviteLinkCount[]
     */
    protected array $inviteLinkCounts;

    public function __construct(array $inviteLinkCounts)
    {
        $this->inviteLinkCounts = $inviteLinkCounts;
    }

    public static function fromArray(array $array): ChatInviteLinkCounts
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['inviteLinkCounts']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->inviteLinkCounts),
        ];
    }

    public function getInviteLinkCounts(): array
    {
        return $this->inviteLinkCounts;
    }
}
