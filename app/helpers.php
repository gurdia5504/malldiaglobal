<?php

if (!function_exists('getImage')) {
    function getImage($menu, $thumb = false)
    {
        $url = "storage/photos/{$menu->user->id}";
        if($thumb) $url .= '/thumbs';
        return asset("{$url}/{$menu->image}");
    }
}

if (!function_exists('currentRoute')) {
  function currentRoute($route)
  {
      return Route::currentRouteNamed($route) ? ' class=current' : '';
  }
}

if (!function_exists('formatDate')) {
  function formatDate($date)
  {
      return ucfirst(utf8_encode ($date->formatLocalized('%d %B %Y')));
  }
}