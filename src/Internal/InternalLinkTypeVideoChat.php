<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a video chat. Call searchPublicChat with the given chat username, and then joinGroupCall with the given invite hash to process the
 * link.
 */
class InternalLinkTypeVideoChat extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeVideoChat';

    public function __construct(
        /**
         * Username of the chat with the video chat.
         */
        protected string $chatUsername,
        /**
         * If non-empty, invite hash to be used to join the video chat without being muted by administrators.
         */
        protected string $inviteHash,
        /**
         * True, if the video chat is expected to be a live stream in a channel or a broadcast group.
         */
        protected bool   $isLiveStream,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeVideoChat
    {
        return new static(
            $array['chat_username'],
            $array['invite_hash'],
            $array['is_live_stream'],
        );
    }

    public function getChatUsername(): string
    {
        return $this->chatUsername;
    }

    public function getInviteHash(): string
    {
        return $this->inviteHash;
    }

    public function getIsLiveStream(): bool
    {
        return $this->isLiveStream;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_username'  => $this->chatUsername,
            'invite_hash'    => $this->inviteHash,
            'is_live_stream' => $this->isLiveStream,
        ];
    }
}
