<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Web;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a Web App. Use getInternalLink with internalLinkTypeWebApp to share the Web App
 */
class WebApp extends TdObject
{
    public const TYPE_NAME = 'webApp';

    /**
     * Web App short name
     *
     * @var string
     */
    protected string $shortName;

    /**
     * Web App title
     *
     * @var string
     */
    protected string $title;

    /**
     * Web App description
     *
     * @var string
     */
    protected string $description;

    /**
     * Web App photo
     *
     * @var Photo
     */
    protected Photo $photo;

    /**
     * Web App animation; may be null
     *
     * @var Animation|null
     */
    protected ?Animation $animation;

    public function __construct(
        string $shortName,
        string $title,
        string $description,
        Photo $photo,
        ?Animation $animation,
    ) {
        $this->shortName = $shortName;
        $this->title = $title;
        $this->description = $description;
        $this->photo = $photo;
        $this->animation = $animation;
    }

    public static function fromArray(array $array): WebApp
    {
        return new static(
            $array['short_name'],
            $array['title'],
            $array['description'],
            TdSchemaRegistry::fromArray($array['photo']),
            (isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'short_name' => $this->shortName,
            'title' => $this->title,
            'description' => $this->description,
            'photo' => $this->photo->typeSerialize(),
            'animation' => (isset($this->animation) ? $this->animation : null),
        ];
    }

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }
}
