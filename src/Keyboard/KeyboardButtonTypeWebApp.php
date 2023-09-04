<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Keyboard;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A button that opens a Web App by calling getWebAppUrl
 */
class KeyboardButtonTypeWebApp extends KeyboardButtonType
{
    public const TYPE_NAME = 'keyboardButtonTypeWebApp';

    /**
     * An HTTP URL to pass to getWebAppUrl
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url)
    {
        parent::__construct();

        $this->url = $url;
    }

    public static function fromArray(array $array): KeyboardButtonTypeWebApp
    {
        return new static(
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
