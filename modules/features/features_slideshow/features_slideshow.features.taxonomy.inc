<?php

/**
 * Implementation of hook_taxonomy_default_vocabularies().
 */
function features_slideshow_taxonomy_default_vocabularies() {
  return array(
    'category' => array(
      'name' => 'Category',
      'description' => 'The categories',
      'help' => '',
      'relations' => '1',
      'hierarchy' => '1',
      'multiple' => '0',
      'required' => '0',
      'tags' => '0',
      'module' => 'features_category',
      'weight' => '0',
      'nodes' => array(
        'article' => 'article',
        'reports' => 'reports',
        'news' => 'news',
        'story' => 'story',
      ),
    ),
  );
}
