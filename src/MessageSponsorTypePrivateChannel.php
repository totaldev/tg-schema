<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * The sponsor is a private channel chat
 */
class MessageSponsorTypePrivateChannel extends MessageSponsorType
{
    public const TYPE_NAME = 'messageSponsorTypePrivateChannel';

    /**
     * Title of the chat
     *
     * @var string
     */
    protected string $title;

    /**
     * Invite link for the channel
     *
     * @var string
     */
    protected string $inviteLink;

    public function __construct(string $title, string $inviteLink)
    {
        parent::__construct();

        $this->title = $title;
        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): MessageSponsorTypePrivateChannel
    {
        return new static(
            $array['title'],
            $array['invite_link'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'invite_link' => $this->inviteLink,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }
}
