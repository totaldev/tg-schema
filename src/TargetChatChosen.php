<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * The chat needs to be chosen by the user among chats of the specified types
 */
class TargetChatChosen extends TargetChat
{
    public const TYPE_NAME = 'targetChatChosen';

    /**
     * True, if private chats with ordinary users are allowed
     *
     * @var bool
     */
    protected bool $allowUserChats;

    /**
     * True, if private chats with other bots are allowed
     *
     * @var bool
     */
    protected bool $allowBotChats;

    /**
     * True, if basic group and supergroup chats are allowed
     *
     * @var bool
     */
    protected bool $allowGroupChats;

    /**
     * True, if channel chats are allowed
     *
     * @var bool
     */
    protected bool $allowChannelChats;

    public function __construct(
        bool $allowUserChats,
        bool $allowBotChats,
        bool $allowGroupChats,
        bool $allowChannelChats
    ) {
        parent::__construct();

        $this->allowUserChats = $allowUserChats;
        $this->allowBotChats = $allowBotChats;
        $this->allowGroupChats = $allowGroupChats;
        $this->allowChannelChats = $allowChannelChats;
    }

    public static function fromArray(array $array): TargetChatChosen
    {
        return new static(
            $array['allow_user_chats'],
            $array['allow_bot_chats'],
            $array['allow_group_chats'],
            $array['allow_channel_chats'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'allow_user_chats' => $this->allowUserChats,
            'allow_bot_chats' => $this->allowBotChats,
            'allow_group_chats' => $this->allowGroupChats,
            'allow_channel_chats' => $this->allowChannelChats,
        ];
    }

    public function getAllowUserChats(): bool
    {
        return $this->allowUserChats;
    }

    public function getAllowBotChats(): bool
    {
        return $this->allowBotChats;
    }

    public function getAllowGroupChats(): bool
    {
        return $this->allowGroupChats;
    }

    public function getAllowChannelChats(): bool
    {
        return $this->allowChannelChats;
    }
}
