<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

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

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'invite_link' => $this->inviteLink,
        ];
    }
}
