<?php

/**
 * Implementation hook_preprocess_views_view
 */
function worldreport_preprocess_views_view(&$vars) {
  $view = $vars['view'];
  if ($view->name == 'news') {
    // for frontpage first news block
    if ($view->current_display == 'block_4') {
      
    }
    // for attach
    if (in_array($view->current_display, array('attachment_1', 'attachment_2', 'attachment_3')) ) {
       
       $term_filter = $view->filter['tid'];
       foreach ($term_filter->value as $tid) {
         $term = taxonomy_get_term($tid);
         $output .= '<span class="term-'.$tid.'">'.l($term->name, taxonomy_term_path($term)).'<span>';
       }
       $vars['header'] = '<div class="header header-'.$view->name.' header-"'.$view->name.'-'.$view->current_display.'>';
       $vars['header'] .= $output.'</div>';
    }
  }
}

/**
 * Implementation hook_preprocess_views_fields
 */
function worldreport_preprocess_views_view_fields(&$vars) {
  $view = $vars['view'];
  
  //clinical_topics
  if ($view->name == 'clinical_topics') {
    if (in_array($view->current_display, array('attachment_1', 'attachment_2', 'attachment_3', 'attachment_4', 'attachment_5', 'attachment_6', 'attachment_7', 'attachment_8', 'attachment_9'))) {
      $view_node = $vars['fields']['view_node'];
      unset($vars['fields']['view_node']);
      $vars['fields']['body']->content .= '<span class="view-node">'. $view_node->content.'</span>';
    }
  }
  
  // popular
  if ($view->name == 'popular') {
    if (in_array($view->current_display, array('block_1'))) {
      $comment_count = $vars['fields']['comment_count'];
      unset($vars['fields']['comment_count']);
      $vars['fields']['body']->content .= '<span class="comment-count">'.$comment_count->content .'</span>'; 
    }
  }
}