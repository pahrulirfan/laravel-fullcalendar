<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Room extends Model implements \MaddHatter\LaravelFullcalendar\Event
{
    public function getEventOptions()
    {
        return [
            'color' => $this->background_color,
        ];
    }
    //

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        // TODO: Implement getTitle() method.
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        // TODO: Implement isAllDay() method.
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        // TODO: Implement getStart() method.
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        // TODO: Implement getEnd() method.
    }
}
