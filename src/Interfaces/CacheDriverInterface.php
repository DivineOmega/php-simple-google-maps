<?php
namespace LangleyFoxall\SimpleGoogleMaps\Interfaces;

interface CacheDriverInterface
{
    public function set($key, $value);

    public function get($key);

    public function delete($key);
}
