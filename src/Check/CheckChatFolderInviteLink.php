<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks the validity of an invite link for a chat folder and returns information about the corresponding chat folder
 */
class CheckChatFolderInviteLink extends TdFunction
{
    public const TYPE_NAME = 'checkChatFolderInviteLink';

    /**
     * Invite link to be checked
     *
     * @var string
     */
    protected string $inviteLink;

    public function __construct(string $inviteLink)
    {
        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): CheckChatFolderInviteLink
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
