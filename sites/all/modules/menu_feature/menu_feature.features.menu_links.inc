<?php
/**
 * @file
 * menu_feature.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function menu_feature_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: main-menu_photography:http://andrewjalexander.com/photos.
  $menu_links['main-menu_photography:http://andrewjalexander.com/photos'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://andrewjalexander.com/photos',
    'router_path' => '',
    'link_title' => 'Photography',
    'options' => array(
      'attributes' => array(
        'title' => 'Photography - still images taken by a camera',
      ),
      'identifier' => 'main-menu_photography:http://andrewjalexander.com/photos',
    ),
    'module' => 'menu',
    'hidden' => 1,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -49,
    'customized' => 1,
  );
  // Exported menu link: main-menu_travels:http://www.andrewjalexander.com/travels.
  $menu_links['main-menu_travels:http://www.andrewjalexander.com/travels'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://www.andrewjalexander.com/travels',
    'router_path' => '',
    'link_title' => 'Travels',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'main-menu_travels:http://www.andrewjalexander.com/travels',
    ),
    'module' => 'menu',
    'hidden' => 1,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -46,
    'customized' => 1,
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Photography');
  t('Travels');

  return $menu_links;
}
