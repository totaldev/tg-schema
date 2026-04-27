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
    public const string TYPE_NAME = 'updateAnimationSearchParameters';

    public function __construct(
        /**
         * The new list of emojis suggested for searching.
         *
         * @var string[]
         */
        protected array  $emojis,
        /**
         * Name of the animation search provider.
         */
        protected string $provider,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateAnimationSearchParameters
    {
        return new static(
            emojis  : $array['emojis'],
            provider: $array['provider'],
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

    public function setEmojis(array $value): static
    {
        $this->emojis = $value;

        return $this;
    }

    public function setProvider(string $value): static
    {
        $this->provider = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'emojis'   => $this->emojis,
            'provider' => $this->provider,
        ];
    }
}
