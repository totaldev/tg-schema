<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Imported\ImportedContact;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a user to the contact list or edits an existing contact by their user identifier.
 */
class AddContact extends TdFunction
{
    public const string TYPE_NAME = 'addContact';

    public function __construct(
        /**
         * The contact to add or edit; phone number may be empty and needs to be specified only if known.
         */
        protected ImportedContact $contact,
        /**
         * Pass true to share the current user's phone number with the new contact. A corresponding rule to userPrivacySettingShowPhoneNumber will be added if needed. Use the field userFullInfo.need_phone_number_privacy_exception to check whether the current user needs to be asked to share their phone number.
         */
        protected bool            $sharePhoneNumber,
        /**
         * Identifier of the user.
         */
        protected int             $userId,
    ) {}

    public static function fromArray(array $array): AddContact
    {
        return new static(
            contact         : TdSchemaRegistry::fromArray($array['contact']),
            sharePhoneNumber: $array['share_phone_number'],
            userId          : $array['user_id'],
        );
    }

    public function getContact(): ImportedContact
    {
        return $this->contact;
    }

    public function getSharePhoneNumber(): bool
    {
        return $this->sharePhoneNumber;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setContact(ImportedContact $value): static
    {
        $this->contact = $value;

        return $this;
    }

    public function setSharePhoneNumber(bool $value): static
    {
        $this->sharePhoneNumber = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'contact'            => $this->contact->jsonSerialize(),
            'share_phone_number' => $this->sharePhoneNumber,
            'user_id'            => $this->userId,
        ];
    }
}
