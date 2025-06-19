<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Main;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Web\WebAppOpenMode;

/**
 * Contains information about the main Web App of a bot.
 */
class MainWebApp extends TdObject
{
    public const TYPE_NAME = 'mainWebApp';

    public function __construct(
        /**
         * URL of the Web App to open.
         */
        protected string         $url,
        /**
         * The mode in which the Web App must be opened.
         */
        protected WebAppOpenMode $mode
    ) {}

    public static function fromArray(array $array): MainWebApp
    {
        return new static(
            $array['url'],
            TdSchemaRegistry::fromArray($array['mode']),
        );
    }

    public function getMode(): WebAppOpenMode
    {
        return $this->mode;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url'   => $this->url,
            'mode'  => $this->mode->typeSerialize(),
        ];
    }
}
