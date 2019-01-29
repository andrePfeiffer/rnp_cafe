<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div id="page-wrapper" <?php if ($messages): ?>class="page-messages"<?php endif; ?> class="<?php print $classes ?>">
  <div id="page">
    <div id="header">
      <div id="top-bar">
        <div class="section">
          <!-- #secondary-menu -->
          <div id="secondary-menu" class="navigation container-inline fio">
            <h2 class="element-invisible">Menu secundário</h2>

            <div id="secondary-menu-block" class="block">
              <ul id="secondary-menu-links" class="links inline">
                    <li class="facebook">
                  <?php print l('<img src="' . base_path() . drupal_get_path('theme', 'sitepublico') . '/img/facebook.png" />', 'https://www.facebook.com/RedeNacionaldeEnsinoePesquisaRNP?fref=ts', array('html' => TRUE, 'atributes' => array('target' => '_blank','fragment'=>'','external'=>TRUE )  )) ?>
</li>
     <li class="twitter">
                  <?php print l('<img src="' . base_path() . drupal_get_path('theme', 'sitepublico') . '/img/twitter.png" />', 'https://twitter.com/rede_rnp', array('html' => TRUE, 'atributes' => array('target' => '_blank','fragment'=>'','external'=>TRUE ))) ?>
</li>

<li class="linkedin">
                  <?php print l('<img src="' . base_path() . drupal_get_path('theme', 'sitepublico') . '/img/in.png" />', 'https://www.linkedin.com/company/rnp', array('html' => TRUE, 'atributes' => array('target' => '_blank','fragment'=>'','external'=>TRUE ))) ?>
</li>



                <li class="language">
                  <?php print _language_switch() ?>
                </li>
                <li class="sitemap">
                   <a href="/sitemap">Mapa do Site</a> <p>&nbsp;</p> 
                </li>
                <li class="font-zoom-out">
                  <a href="#" class="font-zoom-out"><sup>-</sup>A</a>
                </li>
                <li class="font-zoom-zero">
                  <a href="#" class="font-zoom-zero">A</a>
                </li>
                <li class="font-zoom-in">
                  <a href="#" class="font-zoom-in">A<sup>+</sup></a>
                </li>
                <li class="screen-contrast">
                  <a href="#" class="screen-contrast">C</a>
                </li>
                <li class="contact">
                  <?php print l(t('Contact'), _get_translation_set(1)) ?>
                </li>
              </ul>
            </div>

            <?php print render($rnp_search_block) ?>
          </div>
          <!-- /#secondary-menu -->
        </div>
      </div>

      <div id="main-bar">
        <div class="section">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a> <!-- /#logo -->

          <?php print render($page['header']); ?>
        </div>
      </div>
    </div> <!-- /#header -->

    <div id="main-wrapper">
      <div id="main" class="clearfix">
        <div id="content">
          <div class="section">

            <?php if ($breadcrumb): ?>
              <div id="breadcrumb"><?php print $breadcrumb; ?></div>
            <?php endif; ?>

            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>

            <?php print $messages; ?>

            <?php if ($tabs): ?>
              <div id="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
          </div>
        </div> <!-- /.section, /#content -->

        <?php if($page['sidebar']): ?>
        <div id="sidebar">
          <div class="section">
            <?php print render($page['sidebar']) ?>
          </div>
        </div> <!-- /.section, /#sidebar -->
        <?php endif; ?>
      </div>
    </div> <!-- /#main, /#main-wrapper -->

    <div id="footer-wrapper">
      <div id="footer">
        <?php if($page['footer_infos']): ?>
        <div id="info-rnp">
          <div class="section">
            <?php print render($page['footer_infos']); ?>
          </div>
        </div>
        <?php endif; ?>

        <?php if($page['footer_logos']): ?>
        <div id="logos-rnp">
          <div class="section">
            <?php print render($page['footer_logos']); ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div> <!-- /#footer-wrapper -->
  </div> <!-- /#page -->
</div> <!-- /#page-wrapper -->
