<?php

namespace League\CommonMark\Util;

interface ConfigurationInterface
{
    /**
     * Merge an existing array into the current configuration
     *
     * @param array $config
     */
    public function merge(array $config = []);

    /**
     * Replace the entire array with something else
     *
     * @param array $config
     */
    public function replace(array $config = []);

    /**
     * Return the configuration value at the given key, or $default if no such config exists
     *
     * The key can be a string or a slash-delimited path to a nested value
     *
     * @param string|null $key
     * @param mixed|null  $default
     *
     * @return mixed|null
     */
    public function get(?string $key = null, $default = null);

    /**
     * Set the configuration value at the given key
     *
     * The key can be a string or a slash-delimited path to a nested value
     *
     * @param string     $key
     * @param mixed|null $value
     */
    public function set(string $key, $value = null);
}