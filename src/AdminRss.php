<?php

namespace Drupal\adminrss;

/**
 * Class AdminRss contains constants used at various places in the module.
 */
class AdminRss {

  /**
   * The name of the configuration object for the module.
   */
  const CONFIG = 'adminrss.settings';

  /**
   * The name of the single setting within the configuration object.
   */
  const TOKEN = 'token';

  /**
   * The main feed route.
   */
  const ROUTE_MAIN = 'adminrss.feed_controller_feedAction';

  /**
   * The settings route.
   */
  const ROUTE_SETTINGS = 'adminrss.admin_rss_settings_form';

}
