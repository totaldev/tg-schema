<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Represents a list of chat folder invite links
 */
class ChatFolderInviteLinks extends TdObject
{
    public const TYPE_NAME = 'chatFolderInviteLinks';

    /**
     * List of the invite links
     *
     * @var ChatFolderInviteLink[]
     */
    protected array $inviteLinks;

    public function __construct(array $inviteLinks)
    {
        $this->inviteLinks = $inviteLinks;
    }

    public static function fromArray(array $array): ChatFolderInviteLinks
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['inviteLinks']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->inviteLinks),
        ];
    }

    public function getInviteLinks(): array
    {
        return $this->inviteLinks;
    }
}
