<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An animation message (GIF-style).
 */
class MessageAnimation extends MessageContent
{
    public const TYPE_NAME = 'messageAnimation';

    /**
     * The animation description
     *
     * @var Animation
     */
    protected Animation $animation;

    /**
     * Animation caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * True, if the animation preview must be covered by a spoiler animation
     *
     * @var bool
     */
    protected bool $hasSpoiler;

    /**
     * True, if the animation thumbnail must be blurred and the animation must be shown only while tapped
     *
     * @var bool
     */
    protected bool $isSecret;

    public function __construct(Animation $animation, FormattedText $caption, bool $hasSpoiler, bool $isSecret)
    {
        parent::__construct();

        $this->animation = $animation;
        $this->caption = $caption;
        $this->hasSpoiler = $hasSpoiler;
        $this->isSecret = $isSecret;
    }

    public static function fromArray(array $array): MessageAnimation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['animation']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['has_spoiler'],
            $array['is_secret'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'animation' => $this->animation->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
            'has_spoiler' => $this->hasSpoiler,
            'is_secret' => $this->isSecret,
        ];
    }

    public function getAnimation(): Animation
    {
        return $this->animation;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }
}
