<?php
namespace modules\nindoclient;

/**
 * @StringEnum
 */
class FilterType {
    public const
        LIKES = "rankLikes",
        VIEWS = "rankViews",
        SUB_GAIN = "rankSubGain",
        RANK = "rank",
        RETWEETS = "rankRetweets",
        VIEWER = "rankViewer",
        PEAK_VIEWER = "rankPeakViewer";
}