<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * The link is an invite link to a chat folder. Call checkChatFolderInviteLink with the given invite link to process the link
 */
class InternalLinkTypeChatFolderInvite extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeChatFolderInvite';

    /**
     * Internal representation of the invite link
     *
     * @var string
     */
    protected string $inviteLink;

    public function __construct(string $inviteLink)
    {
        parent::__construct();

        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): InternalLinkTypeChatFolderInvite
    {
        return new static(
            $array['invite_link'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'invite_link' => $this->inviteLink,
        ];
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }
}
