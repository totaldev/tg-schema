<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authorization;

/**
 * The user needs to confirm authorization on another logged in device by scanning a QR code with the provided link.
 */
class AuthorizationStateWaitOtherDeviceConfirmation extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitOtherDeviceConfirmation';

    public function __construct(
        /**
         * A tg:// URL for the QR code. The link will be updated frequently.
         */
        protected string $link
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateWaitOtherDeviceConfirmation
    {
        return new static(
            $array['link'],
        );
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'link'  => $this->link,
        ];
    }
}
