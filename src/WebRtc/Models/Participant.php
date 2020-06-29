<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthLib\WebRtc\Models;

/**
 *A participant object
 */
class Participant implements \JsonSerializable
{
    /**
     * Unique id of the participant
     * @var string|null $id public property
     */
    public $id;

    /**
     * Full callback url to use for notifications about this participant
     * @var string|null $callbackUrl public property
     */
    public $callbackUrl;

    /**
     * Defines if this participant can publish audio or video
     * @var array|null $publishPermissions public property
     */
    public $publishPermissions;

    /**
     * List of session ids this participant is associated with
     *
     * Capped to one
     * @var array|null $sessions public property
     */
    public $sessions;

    /**
     * @todo Write general description for this property
     * @var \BandwidthLib\WebRtc\Models\Subscriptions|null $subscriptions public property
     */
    public $subscriptions;

    /**
     * User defined tag to associate with the participant
     * @var string|null $tag public property
     */
    public $tag;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->id                 = func_get_arg(0);
            $this->callbackUrl        = func_get_arg(1);
            $this->publishPermissions = func_get_arg(2);
            $this->sessions           = func_get_arg(3);
            $this->subscriptions      = func_get_arg(4);
            $this->tag                = func_get_arg(5);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                 = $this->id;
        $json['callbackUrl']        = $this->callbackUrl;
        $json['publishPermissions'] =
            isset($this->publishPermissions) ?
            array_values($this->publishPermissions) : null;
        $json['sessions']           = isset($this->sessions) ?
            array_values($this->sessions) : null;
        $json['subscriptions']      = $this->subscriptions;
        $json['tag']                = $this->tag;

        return array_filter($json);
    }
}
