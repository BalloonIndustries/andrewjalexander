<?php
/**
 * @file
 * menu_feature.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function menu_feature_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'mmenu_item_mmenu_left';
  $strongarm->value = array(
    'enabled' => '1',
    'title' => 'Left menu',
    'name' => 'mmenu_left',
    'blocks' => array(
      0 => array(
        'module_delta' => 'system|main-menu',
        'menu_parameters' => array(
          'min_depth' => '1',
        ),
        'title' => 'Main Menu',
        'collapsed' => '0',
        'wrap' => '0',
        'module' => 'system',
        'delta' => 'main-menu',
      ),
    ),
    'options' => array(
      'classes' => 'mm-basic',
      'effects' => array(
        'mm-slide' => 'mm-slide',
      ),
      'slidingSubmenus' => TRUE,
      'clickOpen' => array(
        'open' => TRUE,
        'selector' => '#mm-icon-button',
      ),
      'counters' => array(
        'add' => TRUE,
        'update' => TRUE,
      ),
      'dragOpen' => array(
        'open' => TRUE,
        'pageNode' => 'body',
        'threshold' => 100,
        'maxStartPos' => 50,
      ),
      'footer' => array(
        'add' => FALSE,
        'content' => '',
        'title' => 'Copyright ©2017',
        'update' => TRUE,
      ),
      'header' => array(
        'add' => TRUE,
        'content' => '',
        'title' => 'Andrew Alexander',
        'update' => TRUE,
      ),
      'labels' => array(
        'collapse' => FALSE,
      ),
      'offCanvas' => array(
        'enabled' => TRUE,
        'modal' => FALSE,
        'moveBackground' => TRUE,
        'position' => 'left',
        'zposition' => 'front',
      ),
      'searchfield' => array(
        'add' => FALSE,
        'addTo' => 'menu',
        'search' => FALSE,
        'placeholder' => 'Search',
        'noResults' => 'No results found.',
        'showLinksOnly' => TRUE,
      ),
    ),
    'configurations' => array(
      'clone' => FALSE,
      'preventTabbing' => FALSE,
      'panelNodetype' => 'div, ul, ol',
      'transitionDuration' => 400,
      'classNames' => array(
        'label' => 'Label',
        'panel' => 'Panel',
        'selected' => 'Selected',
        'buttonbars' => array(
          'buttonbar' => 'anchors',
        ),
        'counters' => array(
          'counter' => 'Counter',
        ),
        'fixedElements' => array(
          'fixedTop' => 'FixedTop',
          'fixedBottom' => 'FixedBottom',
        ),
        'footer' => array(
          'panelFooter' => 'Footer',
        ),
        'header' => array(
          'panelHeader' => 'Header',
          'panelNext' => 'Next',
          'panelPrev' => 'Prev',
        ),
        'labels' => array(
          'collapsed' => 'Collapsed',
        ),
        'toggles' => array(
          'toggle' => 'Toggle',
          'check' => 'Check',
        ),
      ),
      'dragOpen' => array(
        'width' => array(
          'perc' => 0.80000000000000004,
          'min' => 140,
          'max' => 440,
        ),
        'height' => array(
          'perc' => 0.80000000000000004,
          'min' => 140,
          'max' => 880,
        ),
      ),
      'offCanvas' => array(
        'menuInjectMethod' => 'prepend',
        'menuWrapperSelector' => 'body',
        'pageNodetype' => 'div',
        'pageSelector' => 'body > div',
      ),
    ),
  );
  $export['mmenu_item_mmenu_left'] = $strongarm;

  return $export;
}
