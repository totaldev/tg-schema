<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a bot, which can be installed to the side menu. Call searchPublicChat with the given bot username, check that the user is a bot and
 * can be added to attachment menu. Then, use getAttachmentMenuBot to receive information about the bot. If the bot isn't added to side menu, then show a
 * disclaimer about Mini Apps being a third-party apps, ask the user to accept their Terms of service and confirm adding the bot to side and attachment menu.
 * If the user accept the terms and confirms adding, then use toggleBotIsAddedToAttachmentMenu to add the bot. If the bot is added to side menu, then use
 * getWebAppUrl with the given URL
 */
class InternalLinkTypeSideMenuBot extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeSideMenuBot';

    /**
     * Username of the bot
     *
     * @var string
     */
    protected string $botUsername;

    /**
     * URL to be passed to getWebAppUrl
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $botUsername, string $url)
    {
        parent::__construct();

        $this->botUsername = $botUsername;
        $this->url = $url;
    }

    public static function fromArray(array $array): InternalLinkTypeSideMenuBot
    {
        return new static(
            $array['bot_username'],
            $array['url'],
        );
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_username' => $this->botUsername,
            'url' => $this->url,
        ];
    }
}
