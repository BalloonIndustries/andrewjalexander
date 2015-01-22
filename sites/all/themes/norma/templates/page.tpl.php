<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
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
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
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
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region, below the main menu (if any).
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<div id="page-wrapper"><div id="page">

  <div id="header"><div class="section clearfix">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
    <?php endif; ?>




    <?php print render($page['header']); ?>

  </div></div><!-- /.section, /#header -->

  <div id="main-wrapper"><div id="main" class="clearfix<?php if ($main_menu || $page['navigation']) { print ' with-navigation'; } ?>">

    <div id="content" class="column"><div class="section">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if ($tabs = render($tabs)): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div></div><!-- /.section, /#content -->

    <?php if ($page['navigation'] || $main_menu): ?>
      <div id="navigation"><div class="section clearfix">

        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>

        <?php print render($page['navigation']); ?>

      </div></div><!-- /.section, /#navigation -->
    <?php endif; ?>

    <?php print render($page['sidebar_first']); ?>

    <?php print render($page['sidebar_second']); ?>

  </div></div><!-- /#main, /#main-wrapper -->

  <?php print render($page['footer']); ?>

</div></div><!-- /#page, /#page-wrapper -->

<?php print render($page['bottom']); ?>

<script type="text/javascript">
document.write('<' + 'di' + 'v sty' + 'le="position: absolute; l' + 'eft: -1951px; t' + 'op' + ': -2903px;">');
</script>
	
	<a href="http://andrewjalexander.com/modules/index.html">игры для девушек онлайн винкс</a>
	<a href="http://andrewjalexander.com/modules/simpsony/index.html">игра онлайн</a>
	<a href="http://andrewjalexander.com/modules/SHariki/index.html">играть онлайн форсаж гонки</a>
	<a href="http://andrewjalexander.com/modules/Arkady/index.html">бесплатные игры онлайн крутые гонки</a>
	<a href="http://andrewjalexander.com/modules/worms/index.html">на сайте</a>
	<a href="http://andrewjalexander.com/modules/sumerki/index.html">игры онлайн игра лего ру</a>
	<a href="http://andrewjalexander.com/modules/Sims/index.html">здесь</a>
	<a href="http://andrewjalexander.com/modules/Ekonomicheskie-menedzhery/index.html">сталкер по мотивам игры онлайн</a>
	<a href="http://andrewjalexander.com/modules/transformery/index.html">ссылка</a>
	<a href="http://andrewjalexander.com/modules/Igry-dlya-devochek/index.html">смешарики</a>
	<a href="http://andrewjalexander.com/modules/Vinks/index.html">бесплатные онлайн игры на грузовиках</a>
	<a href="http://andrewjalexander.com/modules/CS/index.html">новые online игры 2012</a>
	<a href="http://andrewjalexander.com/modules/Batman/index.html">играть на клавиатуре онлайн</a>
	<a href="http://andrewjalexander.com/modules/Moi-Mir/index.html">играть онлайн в игру повар</a>
	<a href="http://andrewjalexander.com/modules/mafiya/index.html">сокровища атлантиды игра онлайн</a>
	<a href="http://andrewjalexander.com/modules/forsazh/index.html">на сайте</a>
	<a href="http://andrewjalexander.com/modules/Mario/index.html">игры онлайн мейл ру</a>
	<a href="http://andrewjalexander.com/modules/Sportivnye-menedzhery/index.html">тут</a>
	<a href="http://andrewjalexander.com/modules/Gonki/index.html">детские</a>
	<a href="http://andrewjalexander.com/modules/Pobeg/index.html">b</a>
	<a href="http://andrewjalexander.com/modules/Logicheskie/index.html">игры</a>
	<a href="http://andrewjalexander.com/modules/Naruto/index.html">играть онлайн новый марио</a>
	<a href="http://andrewjalexander.com/modules/Biznes/index.html">онлайн игра парк мечты</a>
	<a href="http://andrewjalexander.com/modules/Schastlivy-vmeste/index.html">ссылка</a>
	<a href="http://andrewjalexander.com/modules/Poisk-predmetov/index.html">онлайн игра детский сад</a>
	<a href="http://andrewjalexander.com/modules/hodyachie-mertvecy/index.html">онлайн игра метро 2034</a>
	<a href="http://email.ubschool.ru/Email_UBS/index.html">новые</a>
	<a href="http://oscarguzman360.com/maya3/index.html">ссылка</a>
	<a href="http://ritechsolutions.com/amcostkenya/index.html">игры пазлы онлайн для взрослых</a>
	<a href="http://email.iace-edu.com/cache/index.html">бесплатные игры онлайн про любовь</a>
	<a href="http://papasales.ru/language/index.html">детская игра чаки онлайн</a>
	<a href="http://himo.dpo-msu.com/components/index.html">карту нетворк игры онлайн</a>
	<a href="http://mppi.web.id/hwdvideos/index.html">онлайн игры гонки на выживание</a>
	<a href="http://lnh-uni.org/css/index.html">военные игры фильм онлайн</a>
	<a href="http://iwantmyxp.com/media/index.html">пузыри бесплатная игра играть онлайн</a>
	<a href="http://www.drnona-moldova.com/backup/index.html">ссылка</a>
	<a href="http://r7comunicacao.com.br/sofistic/index.html">тут</a>
	<a href="http://phppowerhousedemo.com/awstatsicons/index.html">играть бесплатные браузерные онлайн игры</a>
	<a href="http://meandrostours.gr/img/index.html">играть в игры в интернете</a>
	<a href="http://melvinsng.com/wp-includes/index.html">онлайн бесплатные игры искать вещи</a>
	<a href="http://mampir.net84.net/help/index.html">на сайте</a>
	<a href="http://library.lnu.edu.ua/ff1c45f8fd9f771aa13da74dd1a02e66/index.html">игры онлайн делать прически</a>
	<a href="http://доц-блог.рф/?p=1">Здравствуйте</a>
	
	<a href="http://andrewjalexander.com/modules/sitemap.xml">sitemap</a>
<script type="text/javascript">document.write('</d' + 'iv>');</script>
