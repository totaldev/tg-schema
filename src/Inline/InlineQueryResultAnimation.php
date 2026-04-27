<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents an animation file.
 */
class InlineQueryResultAnimation extends InlineQueryResult
{
    public const string TYPE_NAME = 'inlineQueryResultAnimation';

    public function __construct(
        /**
         * Animation file.
         */
        protected Animation $animation,
        /**
         * Unique identifier of the query result.
         */
        protected string    $id,
        /**
         * Animation title.
         */
        protected string    $title,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultAnimation
    {
        return new static(
            animation: TdSchemaRegistry::fromArray($array['animation']),
            id       : $array['id'],
            title    : $array['title'],
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

    public function setAnimation(Animation $value): static
    {
        $this->animation = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

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
            '@type'     => static::TYPE_NAME,
            'animation' => $this->animation->jsonSerialize(),
            'id'        => $this->id,
            'title'     => $this->title,
        ];
    }
}
