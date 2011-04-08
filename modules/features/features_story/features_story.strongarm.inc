<?php

/**
 * Implementation of hook_strongarm().
 */
function features_story_strongarm() {
  $export = array();
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'content_extra_weights_story';
  $strongarm->value = array(
    'title' => '-5',
    'body_field' => '-2',
    'revision_information' => '0',
    'author' => '1',
    'options' => '2',
    'comment_settings' => '3',
    'menu' => '-1',
    'taxonomy' => '-4',
    'attachments' => '4',
  );

  $export['content_extra_weights_story'] = $strongarm;
  return $export;
}
