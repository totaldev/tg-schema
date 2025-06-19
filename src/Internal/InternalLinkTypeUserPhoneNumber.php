<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a user by its phone number. Call searchUserByPhoneNumber with the given phone number to process the link. If the user is found, then
 * call createPrivateChat and open user's profile information screen or the chat itself. If draft text isn't empty, then put the draft text in the input field.
 */
class InternalLinkTypeUserPhoneNumber extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeUserPhoneNumber';

    public function __construct(
        /**
         * Phone number of the user.
         */
        protected string $phoneNumber,
        /**
         * Draft text for message to send in the chat.
         */
        protected string $draftText,
        /**
         * True, if user's profile information screen must be opened; otherwise, the chat itself must be opened.
         */
        protected bool   $openProfile
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeUserPhoneNumber
    {
        return new static(
            $array['phone_number'],
            $array['draft_text'],
            $array['open_profile'],
        );
    }

    public function getDraftText(): string
    {
        return $this->draftText;
    }

    public function getOpenProfile(): bool
    {
        return $this->openProfile;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'draft_text'   => $this->draftText,
            'open_profile' => $this->openProfile,
        ];
    }
}
