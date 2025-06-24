<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of chat folder invite links.
 */
class ChatFolderInviteLinks extends TdObject
{
    public const TYPE_NAME = 'chatFolderInviteLinks';

    public function __construct(
        /**
         * List of the invite links.
         *
         * @var ChatFolderInviteLink[]
         */
        protected array $inviteLinks
    ) {}

    public static function fromArray(array $array): ChatFolderInviteLinks
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['invite_links']),
        );
    }

    public function getInviteLinks(): array
    {
        return $this->inviteLinks;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->inviteLinks),
        ];
    }
}
