<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Contact\Contact;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a user to the contact list or edits an existing contact by their user identifier
 */
class AddContact extends TdFunction
{
    public const TYPE_NAME = 'addContact';

    /**
     * The contact to add or edit; phone number may be empty and needs to be specified only if known, vCard is ignored
     *
     * @var Contact
     */
    protected Contact $contact;

    /**
     * Pass true to share the current user's phone number with the new contact. A corresponding rule to userPrivacySettingShowPhoneNumber will be added if needed. Use the field userFullInfo.need_phone_number_privacy_exception to check whether the current user needs to be asked to share their phone number
     *
     * @var bool
     */
    protected bool $sharePhoneNumber;

    public function __construct(Contact $contact, bool $sharePhoneNumber)
    {
        $this->contact = $contact;
        $this->sharePhoneNumber = $sharePhoneNumber;
    }

    public static function fromArray(array $array): AddContact
    {
        return new static(
            TdSchemaRegistry::fromArray($array['contact']),
            $array['share_phone_number'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'contact' => $this->contact->typeSerialize(),
            'share_phone_number' => $this->sharePhoneNumber,
        ];
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }

    public function getSharePhoneNumber(): bool
    {
        return $this->sharePhoneNumber;
    }
}