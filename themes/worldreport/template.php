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