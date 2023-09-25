<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes the button that opens a Web App by calling getWebAppUrl
 */
class InlineQueryResultsButtonTypeWebApp extends InlineQueryResultsButtonType
{
    public const TYPE_NAME = 'inlineQueryResultsButtonTypeWebApp';

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

    public static function fromArray(array $array): InlineQueryResultsButtonTypeWebApp
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
