<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Venue\Venue;

/**
 * Represents information about a venue
 */
class InputInlineQueryResultVenue extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultVenue';

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageInvoice, inputMessageLocation,
     * inputMessageVenue or inputMessageContact
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    /**
     * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * Thumbnail height, if known
     *
     * @var int
     */
    protected int $thumbnailHeight;

    /**
     * URL of the result thumbnail, if it exists
     *
     * @var string
     */
    protected string $thumbnailUrl;

    /**
     * Thumbnail width, if known
     *
     * @var int
     */
    protected int $thumbnailWidth;

    /**
     * Venue result
     *
     * @var Venue
     */
    protected Venue $venue;

    public function __construct(
        string              $id,
        Venue               $venue,
        string              $thumbnailUrl,
        int                 $thumbnailWidth,
        int                 $thumbnailHeight,
        ReplyMarkup         $replyMarkup,
        InputMessageContent $inputMessageContent,
    )
    {
        parent::__construct();

        $this->id = $id;
        $this->venue = $venue;
        $this->thumbnailUrl = $thumbnailUrl;
        $this->thumbnailWidth = $thumbnailWidth;
        $this->thumbnailHeight = $thumbnailHeight;
        $this->replyMarkup = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): InputInlineQueryResultVenue
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['venue']),
            $array['thumbnail_url'],
            $array['thumbnail_width'],
            $array['thumbnail_height'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getThumbnailHeight(): int
    {
        return $this->thumbnailHeight;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function getThumbnailWidth(): int
    {
        return $this->thumbnailWidth;
    }

    public function getVenue(): Venue
    {
        return $this->venue;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'venue' => $this->venue->typeSerialize(),
            'thumbnail_url' => $this->thumbnailUrl,
            'thumbnail_width' => $this->thumbnailWidth,
            'thumbnail_height' => $this->thumbnailHeight,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
