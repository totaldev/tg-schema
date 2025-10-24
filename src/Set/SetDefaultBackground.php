<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Background\BackgroundType;
use Totaldev\TgSchema\Input\InputBackground;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets default background for chats; adds the background to the list of installed backgrounds.
 */
class SetDefaultBackground extends TdFunction
{
    public const string TYPE_NAME = 'setDefaultBackground';

    public function __construct(
        /**
         * Pass true if the background is set for a dark theme.
         */
        protected bool             $forDarkTheme,
        /**
         * The input background to use; pass null to create a new filled background.
         */
        protected ?InputBackground $background = null,
        /**
         * Background type; pass null to use the default type of the remote background; backgroundTypeChatTheme isn't supported.
         */
        protected ?BackgroundType  $type = null,
    ) {}

    public static function fromArray(array $array): SetDefaultBackground
    {
        return new static(
            isset($array['background']) ? TdSchemaRegistry::fromArray($array['background']) : null,
            isset($array['type']) ? TdSchemaRegistry::fromArray($array['type']) : null,
            $array['for_dark_theme'],
        );
    }

    public function getBackground(): ?InputBackground
    {
        return $this->background;
    }

    public function getForDarkTheme(): bool
    {
        return $this->forDarkTheme;
    }

    public function getType(): ?BackgroundType
    {
        return $this->type;
    }

    public function setBackground(?InputBackground $value): static
    {
        $this->background = $value;

        return $this;
    }

    public function setForDarkTheme(bool $value): static
    {
        $this->forDarkTheme = $value;

        return $this;
    }

    public function setType(?BackgroundType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'background'     => $this->background ?? null,
            'type'           => $this->type ?? null,
            'for_dark_theme' => $this->forDarkTheme,
        ];
    }
}
