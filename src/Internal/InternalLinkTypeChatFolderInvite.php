<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is an invite link to a chat folder. Call checkChatFolderInviteLink with the given invite link to process the link. If the link is valid and the
 * user wants to join the chat folder, then call addChatFolderByInviteLink.
 */
class InternalLinkTypeChatFolderInvite extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeChatFolderInvite';

    public function __construct(
        /**
         * Internal representation of the invite link.
         */
        protected string $inviteLink
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeChatFolderInvite
    {
        return new static(
            $array['invite_link'],
        );
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'invite_link' => $this->inviteLink,
        ];
    }
}
