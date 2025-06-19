<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a chat by its username. Call searchPublicChat with the given chat username to process the link. If the chat is found, open its profile
 * information screen or the chat itself. If draft text isn't empty and the chat is a private chat with a regular user, then put the draft text in the input
 * field.
 */
class InternalLinkTypePublicChat extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypePublicChat';

    public function __construct(
        /**
         * Username of the chat.
         */
        protected string $chatUsername,
        /**
         * Draft text for message to send in the chat.
         */
        protected string $draftText,
        /**
         * True, if chat profile information screen must be opened; otherwise, the chat itself must be opened.
         */
        protected bool   $openProfile
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypePublicChat
    {
        return new static(
            $array['chat_username'],
            $array['draft_text'],
            $array['open_profile'],
        );
    }

    public function getChatUsername(): string
    {
        return $this->chatUsername;
    }

    public function getDraftText(): string
    {
        return $this->draftText;
    }

    public function getOpenProfile(): bool
    {
        return $this->openProfile;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_username' => $this->chatUsername,
            'draft_text'    => $this->draftText,
            'open_profile'  => $this->openProfile,
        ];
    }
}
