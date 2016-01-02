<?php

/**
 *  Plugin for Bludit Aqua Theme
 *
 *  @package Bludit
 *  @subpackage Plugins
 *  @author Aquafortis
 *  @copyright 2016 Aquafortis
 *  @version 1.0
 *  @website https://github.com/Aquafortis
 *  @release 2016-01-02
 *  @update 2016-01-02
 *
 */

class pluginAquaThemeColors extends Plugin {

  public function init()
  {
    $this->dbFields = array(
      'header'=>'',
      'primary'=>'',
      'secondary'=>''
    );
  }

  public function form()
  {
    global $Language;

    $html  = '<div>';
    $html .= '<label>Header Text Color ie: #FFFFFF</label>';
    $html .= '<input name="header" id="jsheader" type="text" value="'.$this->getDbField('header').'" placeholder="#FFFFFF">';
    $html .= '</div>';
    $html .= '<div>';
    $html .= '<label>Primary Color ie: #2D9BC0</label>';
    $html .= '<input name="primary" id="jsprimary" type="text" value="'.$this->getDbField('primary').'" placeholder="#2D9BC0">';
    $html .= '</div>';
    $html .= '<div>';
    $html .= '<label>Secondary Color ie: #1E6780 (use a darker color)</label>';
    $html .= '<input name="secondary" id="jssecondary" type="text" value="'.$this->getDbField('secondary').'" placeholder="#1E6780">';
    $html .= '</div>';

    return $html;
  }

  public function siteHead(){

    $html  = '<style>
    main .header h1, main .header a { color: '.$this->getDbField('header').'; }
    a, a:visited, .cd-nav h2, .page-title a, .post-title a, .footer { color: '.$this->getDbField('primary').'; }
    main .header, #paginator li.right, #paginator li.left, a.back-to-top { background-color: '.$this->getDbField('primary').'; }
    a:hover, a:focus, a:visited:hover, a:visited:focus, a:active, a:visited:active, body, .page-title a:hover, .page-title a:focus, .post-title a:hover, .post-title a:focus, .footer-nav li.active { color: '.$this->getDbField('secondary').'; }
    .cd-nav-trigger, .cd-nav, #paginator li.right:hover, #paginator li.right:focus, #paginator li.right:visited, #paginator li.left:hover, #paginator li.left:focus, #paginator li.left:visited, a:hover.back-to-top { background-color: '.$this->getDbField('secondary').'; }
    </style>';
    return $html;

  }
}
