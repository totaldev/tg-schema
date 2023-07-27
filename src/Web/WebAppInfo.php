<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Web;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a Web App
 */
class WebAppInfo extends TdObject
{
    public const TYPE_NAME = 'webAppInfo';

    /**
     * Unique identifier for the Web App launch
     *
     * @var int
     */
    protected int $launchId;

    /**
     * A Web App URL to open in a web view
     *
     * @var string
     */
    protected string $url;

    public function __construct(int $launchId, string $url)
    {
        $this->launchId = $launchId;
        $this->url = $url;
    }

    public static function fromArray(array $array): WebAppInfo
    {
        return new static(
            $array['launch_id'],
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'launch_id' => $this->launchId,
            'url' => $this->url,
        ];
    }

    public function getLaunchId(): int
    {
        return $this->launchId;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
