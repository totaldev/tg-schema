<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Web;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a Web App.
 */
class WebAppInfo extends TdObject
{
    public const string TYPE_NAME = 'webAppInfo';

    public function __construct(
        /**
         * Unique identifier for the Web App launch.
         */
        protected int    $launchId,
        /**
         * A Web App URL to open in a web view.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): WebAppInfo
    {
        return new static(
            $array['launch_id'],
            $array['url'],
        );
    }

    public function getLaunchId(): int
    {
        return $this->launchId;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setLaunchId(int $value): static
    {
        $this->launchId = $value;

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
            '@type'     => static::TYPE_NAME,
            'launch_id' => $this->launchId,
            'url'       => $this->url,
        ];
    }
}
