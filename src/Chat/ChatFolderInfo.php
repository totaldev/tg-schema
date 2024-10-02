<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains basic information about a chat folder.
 */
class ChatFolderInfo extends TdObject
{
    public const TYPE_NAME = 'chatFolderInfo';

    public function __construct(
        /**
         * Unique chat folder identifier.
         */
        protected int            $id,
        /**
         * The title of the folder; 1-12 characters without line feeds.
         */
        protected string         $title,
        /**
         * The chosen or default icon for the chat folder.
         */
        protected ChatFolderIcon $icon,
        /**
         * The identifier of the chosen color for the chat folder icon; from -1 to 6. If -1, then color is disabled.
         */
        protected int            $colorId,
        /**
         * True, if at least one link has been created for the folder.
         */
        protected bool           $isShareable,
        /**
         * True, if the chat folder has invite links created by the current user.
         */
        protected bool           $hasMyInviteLinks,
    ) {}

    public static function fromArray(array $array): ChatFolderInfo
    {
        return new static(
            $array['id'],
            $array['title'],
            TdSchemaRegistry::fromArray($array['icon']),
            $array['color_id'],
            $array['is_shareable'],
            $array['has_my_invite_links'],
        );
    }

    public function getColorId(): int
    {
        return $this->colorId;
    }

    public function getHasMyInviteLinks(): bool
    {
        return $this->hasMyInviteLinks;
    }

    public function getIcon(): ChatFolderIcon
    {
        return $this->icon;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsShareable(): bool
    {
        return $this->isShareable;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'id'                  => $this->id,
            'title'               => $this->title,
            'icon'                => $this->icon->typeSerialize(),
            'color_id'            => $this->colorId,
            'is_shareable'        => $this->isShareable,
            'has_my_invite_links' => $this->hasMyInviteLinks,
        ];
    }
}
