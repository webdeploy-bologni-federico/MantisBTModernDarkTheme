<?php

class MantisBTModernDarkThemePlugin extends MantisPlugin {

  function register() {
    $this->name        = 'WD MantisBT Dark Theme';
    $this->description = 'A clean and dark theme for MantisBT based on MantisBT Modern Dark Theme.';

    $this->version     = '1.0.1';
    $this->requires    = array(
      'MantisCore'       => '2.0.0',
    );

    $this->author      = 'webdeploy-bologni-federico';
    $this->contact     = 'bologni.federico@webdeploy.it';
	$this->url         = 'https://github.com/webdeploy-bologni-federico';
  }

  function hooks() {
    return array(
        'EVENT_LAYOUT_RESOURCES' => 'add_css'
    );
  }

  function add_css($p_event) {
      echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('ModernDarkTheme.css') . '" />' . "\n";
      echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('fonts/css/ibm-plex.min.css') . '" />' . "\n";

  }

}