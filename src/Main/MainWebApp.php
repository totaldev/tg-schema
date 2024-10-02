<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Main;

use Totaldev\TgSchema\TdObject;

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
        protected string $url,
        /**
         * True, if the Web App must always be opened in the compact mode instead of the full-size mode.
         */
        protected bool   $isCompact,
    ) {}

    public static function fromArray(array $array): MainWebApp
    {
        return new static(
            $array['url'],
            $array['is_compact'],
        );
    }

    public function getIsCompact(): bool
    {
        return $this->isCompact;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'url'        => $this->url,
            'is_compact' => $this->isCompact,
        ];
    }
}
