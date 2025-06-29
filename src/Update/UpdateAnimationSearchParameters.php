<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The parameters of animation search through getOption("animation_search_bot_username") bot has changed.
 */
class UpdateAnimationSearchParameters extends Update
{
    public const TYPE_NAME = 'updateAnimationSearchParameters';

    public function __construct(
        /**
         * Name of the animation search provider.
         */
        protected string $provider,
        /**
         * The new list of emojis suggested for searching.
         *
         * @var string[]
         */
        protected array  $emojis
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateAnimationSearchParameters
    {
        return new static(
            $array['provider'],
            $array['emojis'],
        );
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'provider' => $this->provider,
            'emojis'   => $this->emojis,
        ];
    }
}
