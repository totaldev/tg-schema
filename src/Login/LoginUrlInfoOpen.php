<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Login;

/**
 * An HTTP URL needs to be open.
 */
class LoginUrlInfoOpen extends LoginUrlInfo
{
    public const string TYPE_NAME = 'loginUrlInfoOpen';

    public function __construct(
        /**
         * True, if there is no need to show an ordinary open URL confirmation.
         */
        protected bool   $skipConfirmation,
        /**
         * The URL to open.
         */
        protected string $url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LoginUrlInfoOpen
    {
        return new static(
            skipConfirmation: $array['skip_confirmation'],
            url             : $array['url'],
        );
    }

    public function getSkipConfirmation(): bool
    {
        return $this->skipConfirmation;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setSkipConfirmation(bool $value): static
    {
        $this->skipConfirmation = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'skip_confirmation' => $this->skipConfirmation,
            'url'               => $this->url,
        ];
    }
}
