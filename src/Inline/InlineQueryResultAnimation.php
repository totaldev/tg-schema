<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents an animation file
 */
class InlineQueryResultAnimation extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultAnimation';

    /**
     * Animation file
     *
     * @var Animation
     */
    protected Animation $animation;

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * Animation title
     *
     * @var string
     */
    protected string $title;

    public function __construct(string $id, Animation $animation, string $title)
    {
        parent::__construct();

        $this->id = $id;
        $this->animation = $animation;
        $this->title = $title;
    }

    public static function fromArray(array $array): InlineQueryResultAnimation
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['animation']),
            $array['title'],
        );
    }

    public function getAnimation(): Animation
    {
        return $this->animation;
    }

    public function getId(): string
    {
        return $this->id;
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
            'animation' => $this->animation->typeSerialize(),
            'title' => $this->title,
        ];
    }
}
