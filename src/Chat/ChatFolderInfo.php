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
    public const string TYPE_NAME = 'chatFolderInfo';

    public function __construct(
        /**
         * The identifier of the chosen color for the chat folder icon; from -1 to 6. If -1, then color is disabled.
         */
        protected int            $colorId,
        /**
         * True, if the chat folder has invite links created by the current user.
         */
        protected bool           $hasMyInviteLinks,
        /**
         * The chosen or default icon for the chat folder.
         */
        protected ChatFolderIcon $icon,
        /**
         * Unique chat folder identifier.
         */
        protected int            $id,
        /**
         * True, if at least one link has been created for the folder.
         */
        protected bool           $isShareable,
        /**
         * The name of the folder.
         */
        protected ChatFolderName $name,
    ) {}

    public static function fromArray(array $array): ChatFolderInfo
    {
        return new static(
            colorId         : $array['color_id'],
            hasMyInviteLinks: $array['has_my_invite_links'],
            icon            : TdSchemaRegistry::fromArray($array['icon']),
            id              : $array['id'],
            isShareable     : $array['is_shareable'],
            name            : TdSchemaRegistry::fromArray($array['name']),
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

    public function getName(): ChatFolderName
    {
        return $this->name;
    }

    public function setColorId(int $value): static
    {
        $this->colorId = $value;

        return $this;
    }

    public function setHasMyInviteLinks(bool $value): static
    {
        $this->hasMyInviteLinks = $value;

        return $this;
    }

    public function setIcon(ChatFolderIcon $value): static
    {
        $this->icon = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsShareable(bool $value): static
    {
        $this->isShareable = $value;

        return $this;
    }

    public function setName(ChatFolderName $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'color_id'            => $this->colorId,
            'has_my_invite_links' => $this->hasMyInviteLinks,
            'icon'                => $this->icon->jsonSerialize(),
            'id'                  => $this->id,
            'is_shareable'        => $this->isShareable,
            'name'                => $this->name->jsonSerialize(),
        ];
    }
}
