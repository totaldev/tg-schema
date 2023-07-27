<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\Target\TargetChat;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to an attachment menu bot to be opened in the specified or a chosen chat. Process given target_chat to open the chat. Then, call searchPublicChat with the given bot username, check that the user is a bot and can be added to attachment menu. Then, use getAttachmentMenuBot to receive information about the bot. If the bot isn't added to attachment menu, then user needs to confirm adding the bot to attachment menu. If user confirms adding, then use toggleBotIsAddedToAttachmentMenu to add it. If the attachment menu bot can't be used in the opened chat, show an error to the user. If the bot is added to attachment menu and can be used in the chat, then use openWebApp with the given URL
 */
class InternalLinkTypeAttachmentMenuBot extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeAttachmentMenuBot';

    /**
     * Target chat to be opened
     *
     * @var TargetChat
     */
    protected TargetChat $targetChat;

    /**
     * Username of the bot
     *
     * @var string
     */
    protected string $botUsername;

    /**
     * URL to be passed to openWebApp
     *
     * @var string
     */
    protected string $url;

    public function __construct(TargetChat $targetChat, string $botUsername, string $url)
    {
        parent::__construct();

        $this->targetChat = $targetChat;
        $this->botUsername = $botUsername;
        $this->url = $url;
    }

    public static function fromArray(array $array): InternalLinkTypeAttachmentMenuBot
    {
        return new static(
            TdSchemaRegistry::fromArray($array['target_chat']),
            $array['bot_username'],
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'target_chat' => $this->targetChat->typeSerialize(),
            'bot_username' => $this->botUsername,
            'url' => $this->url,
        ];
    }

    public function getTargetChat(): TargetChat
    {
        return $this->targetChat;
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
