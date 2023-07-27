<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a Web App by its short name. Returns a 404 error if the Web App is not found
 */
class SearchWebApp extends TdFunction
{
    public const TYPE_NAME = 'searchWebApp';

    /**
     * Identifier of the target bot
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * Short name of the Web App
     *
     * @var string
     */
    protected string $webAppShortName;

    public function __construct(int $botUserId, string $webAppShortName)
    {
        $this->botUserId = $botUserId;
        $this->webAppShortName = $webAppShortName;
    }

    public static function fromArray(array $array): SearchWebApp
    {
        return new static(
            $array['bot_user_id'],
            $array['web_app_short_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'web_app_short_name' => $this->webAppShortName,
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getWebAppShortName(): string
    {
        return $this->webAppShortName;
    }
}
