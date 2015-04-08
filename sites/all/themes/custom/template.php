<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 4/8/15
 * Time: 4:44 PM
 */

function custom_preprocess_user_profile(&$variables) {
  $result = db_query('SELECT * FROM {node} WHERE type="cv" AND uid='.arg(1));
  $nodes = array();
  while($node = db_fetch_object($result)) {
    $nodes[$node->title] = $node->nid;
  }
  $variables['nodes'] = $nodes;
}