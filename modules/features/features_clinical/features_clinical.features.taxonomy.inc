<?php

/**
 * Implementation of hook_taxonomy_default_vocabularies().
 */
function features_clinical_taxonomy_default_vocabularies() {
  return array(
    'clinical_topics' => array(
      'name' => 'Clinical Topics',
      'description' => 'The clinical topics',
      'help' => '',
      'relations' => '1',
      'hierarchy' => '1',
      'multiple' => '0',
      'required' => '0',
      'tags' => '0',
      'module' => 'features_clinical_topics',
      'weight' => '0',
      'nodes' => array(
        'story' => 'story',
        'news' => 'news',
        'reports' => 'reports',
        'article' => 'article',
      ),
    ),
    'subspecialities' => array(
      'name' => 'Subspecialities',
      'description' => 'The Subspecialities',
      'help' => '',
      'relations' => '1',
      'hierarchy' => '0',
      'multiple' => '0',
      'required' => '0',
      'tags' => '0',
      'module' => 'features_subspecialities',
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
