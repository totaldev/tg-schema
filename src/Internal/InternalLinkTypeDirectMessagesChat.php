<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a channel direct messages chat by username of the channel. Call searchPublicChat with the given chat username to process the link. If
 * the chat is found and is channel, open the direct messages chat of the channel.
 */
class InternalLinkTypeDirectMessagesChat extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeDirectMessagesChat';

    public function __construct(
        /**
         * Username of the channel.
         */
        protected string $channelUsername
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeDirectMessagesChat
    {
        return new static(
            $array['channel_username'],
        );
    }

    public function getChannelUsername(): string
    {
        return $this->channelUsername;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'channel_username' => $this->channelUsername,
        ];
    }
}
