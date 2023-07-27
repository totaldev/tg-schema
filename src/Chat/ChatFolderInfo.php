<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains basic information about a chat folder
 */
class ChatFolderInfo extends TdObject
{
    public const TYPE_NAME = 'chatFolderInfo';

    /**
     * Unique chat folder identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * The title of the folder; 1-12 characters without line feeds
     *
     * @var string
     */
    protected string $title;

    /**
     * The chosen or default icon for the chat folder
     *
     * @var ChatFolderIcon
     */
    protected ChatFolderIcon $icon;

    /**
     * True, if at least one link has been created for the folder
     *
     * @var bool
     */
    protected bool $isShareable;

    /**
     * True, if the chat folder has invite links created by the current user
     *
     * @var bool
     */
    protected bool $hasMyInviteLinks;

    public function __construct(
        int $id,
        string $title,
        ChatFolderIcon $icon,
        bool $isShareable,
        bool $hasMyInviteLinks,
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->icon = $icon;
        $this->isShareable = $isShareable;
        $this->hasMyInviteLinks = $hasMyInviteLinks;
    }

    public static function fromArray(array $array): ChatFolderInfo
    {
        return new static(
            $array['id'],
            $array['title'],
            TdSchemaRegistry::fromArray($array['icon']),
            $array['is_shareable'],
            $array['has_my_invite_links'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'title' => $this->title,
            'icon' => $this->icon->typeSerialize(),
            'is_shareable' => $this->isShareable,
            'has_my_invite_links' => $this->hasMyInviteLinks,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIcon(): ChatFolderIcon
    {
        return $this->icon;
    }

    public function getIsShareable(): bool
    {
        return $this->isShareable;
    }

    public function getHasMyInviteLinks(): bool
    {
        return $this->hasMyInviteLinks;
    }
}
