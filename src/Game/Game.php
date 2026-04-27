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
    public const string TYPE_NAME = 'game';

    public function __construct(
        /**
         * Game animation; may be null.
         */
        protected ?Animation    $animation,
        /**
         * Game description.
         */
        protected string        $description,
        /**
         * Unique game identifier.
         */
        protected int           $id,
        /**
         * Game photo.
         */
        protected Photo         $photo,
        /**
         * Game short name.
         */
        protected string        $shortName,
        /**
         * Game text, usually containing scoreboards for a game.
         */
        protected FormattedText $text,
        /**
         * Game title.
         */
        protected string        $title,
    ) {}

    public static function fromArray(array $array): Game
    {
        return new static(
            animation  : (isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null),
            description: $array['description'],
            id         : $array['id'],
            photo      : TdSchemaRegistry::fromArray($array['photo']),
            shortName  : $array['short_name'],
            text       : TdSchemaRegistry::fromArray($array['text']),
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

    public function setId(int $value): static
    {
        $this->id = $value;

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

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

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
            'id'          => $this->id,
            'photo'       => $this->photo->jsonSerialize(),
            'short_name'  => $this->shortName,
            'text'        => $this->text->jsonSerialize(),
            'title'       => $this->title,
        ];
    }
}
