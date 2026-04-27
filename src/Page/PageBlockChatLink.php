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
         * Identifier of the accent color for chat title and background of chat photo.
         */
        protected int            $accentColorId,
        /**
         * Chat photo; may be null.
         */
        protected ?ChatPhotoInfo $photo,
        /**
         * Chat title.
         */
        protected string         $title,
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
            accentColorId: $array['accent_color_id'],
            photo        : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            title        : $array['title'],
            username     : $array['username'],
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
            'accent_color_id' => $this->accentColorId,
            'photo'           => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
            'title'           => $this->title,
            'username'        => $this->username,
        ];
    }
}
