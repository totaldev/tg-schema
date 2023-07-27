<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Join;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Uses an invite link to add the current user to the chat if possible. May return an error with a message "INVITE_REQUEST_SENT" if only a join request was created
 */
class JoinChatByInviteLink extends TdFunction
{
    public const TYPE_NAME = 'joinChatByInviteLink';

    /**
     * Invite link to use
     *
     * @var string
     */
    protected string $inviteLink;

    public function __construct(string $inviteLink)
    {
        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): JoinChatByInviteLink
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
