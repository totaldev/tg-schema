<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks whether a file can be downloaded and saved locally by Web App request.
 */
class CheckWebAppFileDownload extends TdFunction
{
    public const TYPE_NAME = 'checkWebAppFileDownload';

    public function __construct(
        /**
         * Identifier of the bot, providing the Web App.
         */
        protected int    $botUserId,
        /**
         * Name of the file.
         */
        protected string $fileName,
        /**
         * URL of the file.
         */
        protected string $url
    ) {}

    public static function fromArray(array $array): CheckWebAppFileDownload
    {
        return new static(
            $array['bot_user_id'],
            $array['file_name'],
            $array['url'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'file_name'   => $this->fileName,
            'url'         => $this->url,
        ];
    }
}
