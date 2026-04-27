<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Web;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a Web App. Use getInternalLink with internalLinkTypeWebApp to share the Web App.
 */
class WebApp extends TdObject
{
    public const string TYPE_NAME = 'webApp';

    public function __construct(
        /**
         * Web App animation; may be null.
         */
        protected ?Animation $animation,
        /**
         * Web App description.
         */
        protected string     $description,
        /**
         * Web App photo.
         */
        protected Photo      $photo,
        /**
         * Web App short name.
         */
        protected string     $shortName,
        /**
         * Web App title.
         */
        protected string     $title,
    ) {}

    public static function fromArray(array $array): WebApp
    {
        return new static(
            animation  : (isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null),
            description: $array['description'],
            photo      : TdSchemaRegistry::fromArray($array['photo']),
            shortName  : $array['short_name'],
            title      : $array['title'],
        );
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setAnimation(?Animation $value): static
    {
        $this->animation = $value;

        return $this;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setPhoto(Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setShortName(string $value): static
    {
        $this->shortName = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'animation'   => (null !== $this->animation ? $this->animation->jsonSerialize() : null),
            'description' => $this->description,
            'photo'       => $this->photo->jsonSerialize(),
            'short_name'  => $this->shortName,
            'title'       => $this->title,
        ];
    }
}
