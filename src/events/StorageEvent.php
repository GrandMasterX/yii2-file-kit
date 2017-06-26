<?php

namespace grandmasterx\filekit\events;

use yii\base\Event;

/**
 * Class StorageEvent
 * @package grandmasterx\filekit\events
 * @author Eugene Terentev <eugene@terentev.net>
 */
class StorageEvent extends Event
{
    /**
     * @var \League\Flysystem\FilesystemInterface
     */
    public $filesystem;
    /**
     * @var string
     */
    public $path;
}
