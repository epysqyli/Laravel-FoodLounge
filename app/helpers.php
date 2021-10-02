<?php

use App\User;

function makeUniqueSlug($slug)
{
  $modifier = 0;
  while (User::where('slug', $slug)->first()) {
    if (!$modifier) {
      $slug .= '-' . $modifier;
    } else {
      $ex_slug = explode('-', $slug);
      $length = count($ex_slug) - 1;
      $ex_slug[$length] = $modifier;
      $slug = implode('-', $ex_slug);
    }
    $modifier++;
  }

  return $slug;
}