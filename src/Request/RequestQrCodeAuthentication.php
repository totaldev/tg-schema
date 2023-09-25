<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Request;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Requests QR code authentication by scanning a QR code on another logged in device. Works only when the current authorization state is authorizationStateWaitPhoneNumber, or if there is no pending authentication query and the current authorization state is authorizationStateWaitEmailAddress, authorizationStateWaitEmailCode, authorizationStateWaitCode, authorizationStateWaitRegistration, or authorizationStateWaitPassword
 */
class RequestQrCodeAuthentication extends TdFunction
{
    public const TYPE_NAME = 'requestQrCodeAuthentication';

    /**
     * List of user identifiers of other users currently using the application
     *
     * @var int[]
     */
    protected array $otherUserIds;

    public function __construct(array $otherUserIds)
    {
        $this->otherUserIds = $otherUserIds;
    }

    public static function fromArray(array $array): RequestQrCodeAuthentication
    {
        return new static(
            $array['other_user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'other_user_ids' => $this->otherUserIds,
        ];
    }

    public function getOtherUserIds(): array
    {
        return $this->otherUserIds;
    }
}
