<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Game;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a game. Use getInternalLink with internalLinkTypeGame to share the game.
 */
class Game extends TdObject
{
    public const TYPE_NAME = 'game';

    public function __construct(
        /**
         * Unique game identifier.
         */
        protected int           $id,
        /**
         * Game short name.
         */
        protected string        $shortName,
        /**
         * Game title.
         */
        protected string        $title,
        /**
         * Game text, usually containing scoreboards for a game.
         */
        protected FormattedText $text,
        /**
         * Game description.
         */
        protected string        $description,
        /**
         * Game photo.
         */
        protected Photo         $photo,
        /**
         * Game animation; may be null.
         */
        protected ?Animation    $animation,
    ) {}

    public static function fromArray(array $array): Game
    {
        return new static(
            $array['id'],
            $array['short_name'],
            $array['title'],
            TdSchemaRegistry::fromArray($array['text']),
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

    public function getId(): int
    {
        return $this->id;
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'short_name'  => $this->shortName,
            'title'       => $this->title,
            'text'        => $this->text->typeSerialize(),
            'description' => $this->description,
            'photo'       => $this->photo->typeSerialize(),
            'animation'   => (isset($this->animation) ? $this->animation : null),
        ];
    }
}
