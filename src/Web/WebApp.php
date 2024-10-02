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
    public const TYPE_NAME = 'webApp';

    public function __construct(
        /**
         * Web App short name.
         */
        protected string     $shortName,
        /**
         * Web App title.
         */
        protected string     $title,
        /**
         * Web App description.
         */
        protected string     $description,
        /**
         * Web App photo.
         */
        protected Photo      $photo,
        /**
         * Web App animation; may be null.
         */
        protected ?Animation $animation,
    ) {}

    public static function fromArray(array $array): WebApp
    {
        return new static(
            $array['short_name'],
            $array['title'],
            $array['description'],
            TdSchemaRegistry::fromArray($array['photo']),
            isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'short_name'  => $this->shortName,
            'title'       => $this->title,
            'description' => $this->description,
            'photo'       => $this->photo->typeSerialize(),
            'animation'   => (isset($this->animation) ? $this->animation : null),
        ];
    }
}
