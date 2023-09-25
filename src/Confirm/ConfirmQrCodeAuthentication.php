<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Confirm;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Confirms QR code authentication on another device. Returns created session on success
 */
class ConfirmQrCodeAuthentication extends TdFunction
{
    public const TYPE_NAME = 'confirmQrCodeAuthentication';

    /**
     * A link from a QR code. The link must be scanned by the in-app camera
     *
     * @var string
     */
    protected string $link;

    public function __construct(string $link)
    {
        $this->link = $link;
    }

    public static function fromArray(array $array): ConfirmQrCodeAuthentication
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
            'link' => $this->link,
        ];
    }
}
