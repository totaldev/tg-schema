<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Chat\ChatPhotoInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A link to a chat.
 */
class PageBlockChatLink extends PageBlock
{
    public const string TYPE_NAME = 'pageBlockChatLink';

    public function __construct(
        /**
         * Chat title.
         */
        protected string         $title,
        /**
         * Chat photo; may be null.
         */
        protected ?ChatPhotoInfo $photo,
        /**
         * Identifier of the accent color for chat title and background of chat photo.
         */
        protected int            $accentColorId,
        /**
         * Chat username by which all other information about the chat can be resolved.
         */
        protected string         $username,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockChatLink
    {
        return new static(
            $array['title'],
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            $array['accent_color_id'],
            $array['username'],
        );
    }

    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    public function getPhoto(): ?ChatPhotoInfo
    {
        return $this->photo;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setAccentColorId(int $value): static
    {
        $this->accentColorId = $value;

        return $this;
    }

    public function setPhoto(?ChatPhotoInfo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setUsername(string $value): static
    {
        $this->username = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'title'           => $this->title,
            'photo'           => $this->photo ?? null,
            'accent_color_id' => $this->accentColorId,
            'username'        => $this->username,
        ];
    }
}
