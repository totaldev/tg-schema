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
    public const TYPE_NAME = 'loginUrlInfoOpen';

    public function __construct(
        /**
         * The URL to open.
         */
        protected string $url,
        /**
         * True, if there is no need to show an ordinary open URL confirmation.
         */
        protected bool   $skipConfirmation,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LoginUrlInfoOpen
    {
        return new static(
            $array['url'],
            $array['skip_confirmation'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'url'               => $this->url,
            'skip_confirmation' => $this->skipConfirmation,
        ];
    }
}
