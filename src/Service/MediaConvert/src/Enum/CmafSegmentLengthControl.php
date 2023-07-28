<?php

namespace AsyncAws\MediaConvert\Enum;

/**
 * Specify how you want MediaConvert to determine the segment length. Choose Exact to have the encoder use the exact
 * length that you specify with the setting Segment length. This might result in extra I-frames. Choose Multiple of GOP
 * to have the encoder round up the segment lengths to match the next GOP boundary.
 */
final class CmafSegmentLengthControl
{
    public const EXACT = 'EXACT';
    public const GOP_MULTIPLE = 'GOP_MULTIPLE';

    public static function exists(string $value): bool
    {
        return isset([
            self::EXACT => true,
            self::GOP_MULTIPLE => true,
        ][$value]);
    }
}
