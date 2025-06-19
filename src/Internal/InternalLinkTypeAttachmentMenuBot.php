<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\Target\TargetChat;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to an attachment menu bot to be opened in the specified or a chosen chat. Process given target_chat to open the chat. Then, call
 * searchPublicChat with the given bot username, check that the user is a bot and can be added to attachment menu. Then, use getAttachmentMenuBot to receive
 * information about the bot. If the bot isn't added to attachment menu, then show a disclaimer about Mini Apps being third-party applications, ask the user to
 * accept their Terms of service and confirm adding the bot to side and attachment menu. If the user accept the terms and confirms adding, then use
 * toggleBotIsAddedToAttachmentMenu to add the bot. If the attachment menu bot can't be used in the opened chat, show an error to the user. If the bot is added
 * to attachment menu and can be used in the chat, then use openWebApp with the given URL.
 */
class InternalLinkTypeAttachmentMenuBot extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeAttachmentMenuBot';

    public function __construct(
        /**
         * Target chat to be opened.
         */
        protected TargetChat $targetChat,
        /**
         * Username of the bot.
         */
        protected string     $botUsername,
        /**
         * URL to be passed to openWebApp.
         */
        protected string     $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeAttachmentMenuBot
    {
        return new static(
            TdSchemaRegistry::fromArray($array['target_chat']),
            $array['bot_username'],
            $array['url'],
        );
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function getTargetChat(): TargetChat
    {
        return $this->targetChat;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'target_chat'  => $this->targetChat->typeSerialize(),
            'bot_username' => $this->botUsername,
            'url'          => $this->url,
        ];
    }
}
