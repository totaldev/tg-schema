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
 * Describes a game. Use getInternalLink with internalLinkTypeGame to share the game
 */
class Game extends TdObject
{
    public const TYPE_NAME = 'game';

    /**
     * Game animation; may be null
     *
     * @var Animation|null
     */
    protected ?Animation $animation;

    /**
     * Game description
     *
     * @var string
     */
    protected string $description;

    /**
     * Unique game identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * Game photo
     *
     * @var Photo
     */
    protected Photo $photo;

    /**
     * Game short name
     *
     * @var string
     */
    protected string $shortName;

    /**
     * Game text, usually containing scoreboards for a game
     *
     * @var FormattedText
     */
    protected FormattedText $text;

    /**
     * Game title
     *
     * @var string
     */
    protected string $title;

    public function __construct(
        int           $id,
        string        $shortName,
        string        $title,
        FormattedText $text,
        string        $description,
        Photo         $photo,
        ?Animation    $animation,
    )
    {
        $this->id = $id;
        $this->shortName = $shortName;
        $this->title = $title;
        $this->text = $text;
        $this->description = $description;
        $this->photo = $photo;
        $this->animation = $animation;
    }

    public static function fromArray(array $array): Game
    {
        return new static(
            $array['id'],
            $array['short_name'],
            $array['title'],
            TdSchemaRegistry::fromArray($array['text']),
            $array['description'],
            TdSchemaRegistry::fromArray($array['photo']),
            (isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null),
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
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'short_name' => $this->shortName,
            'title' => $this->title,
            'text' => $this->text->typeSerialize(),
            'description' => $this->description,
            'photo' => $this->photo->typeSerialize(),
            'animation' => (isset($this->animation) ? $this->animation : null),
        ];
    }
}
