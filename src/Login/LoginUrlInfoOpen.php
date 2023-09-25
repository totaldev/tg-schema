<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Login;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An HTTP URL needs to be open
 */
class LoginUrlInfoOpen extends LoginUrlInfo
{
    public const TYPE_NAME = 'loginUrlInfoOpen';

    /**
     * True, if there is no need to show an ordinary open URL confirmation
     *
     * @var bool
     */
    protected bool $skipConfirmation;

    /**
     * The URL to open
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url, bool $skipConfirmation)
    {
        parent::__construct();

        $this->url = $url;
        $this->skipConfirmation = $skipConfirmation;
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
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
            'skip_confirmation' => $this->skipConfirmation,
        ];
    }
}
