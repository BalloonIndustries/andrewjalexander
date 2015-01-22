<?php // Corolla ?>
<div id="page-wrapper">
  <div id="page" class="<?php print $classes; ?>">

    <?php if ($menubar = render($page['menu_bar'])): ?>
      <div id="menu-bar-wrapper">
        <div class="container clearfix">
          <?php print $menubar; ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="header-wrapper">
      <div class="container clearfix">

        <header class="clearfix<?php print $site_logo ? ' with-logo' : ''; ?>" role="banner">

          <?php if ($site_logo || $site_name || $site_slogan): ?>
            <div id="branding" class="branding-elements clearfix">

              <?php if ($site_logo): ?>
                <div id="logo">
                  <?php print $site_logo; ?>
                </div>
              <?php endif; ?>

              <?php if ($site_name || $site_slogan): ?>
                <hgroup id="name-and-slogan"<?php print $hgroup_attributes; ?>>

                  <?php if ($site_name): ?>
                    <h1 id="site-name"<?php print $site_name_attributes; ?>><?php print $site_name; ?></h1>
                  <?php endif; ?>

                  <?php if ($site_slogan): ?>
                    <h2 id="site-slogan"<?php print $site_slogan_attributes; ?>><?php print $site_slogan; ?></h2>
                  <?php endif; ?>

                </hgroup>
              <?php endif; ?>

            </div>
          <?php endif; ?>

          <?php print render($page['header']); ?>

        </header>

      </div>
    </div>

    <?php if (
      $page['three_33_top'] ||
      $page['three_33_first'] ||
      $page['three_33_second'] ||
      $page['three_33_third'] ||
      $page['three_33_bottom']
      ): ?>
      <div id="top-panels-wrapper">
        <div class="container clearfix">
          <!-- Three column 3x33 Gpanel -->
          <div class="at-panel gpanel panel-display three-3x33 clearfix">
            <?php print render($page['three_33_top']); ?>
            <?php print render($page['three_33_first']); ?>
            <?php print render($page['three_33_second']); ?>
            <?php print render($page['three_33_third']); ?>
            <?php print render($page['three_33_bottom']); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($page['secondary_content']): ?>
      <div id="secondary-content-wrapper">
        <div class="container clearfix">
          <?php print render($page['secondary_content']); ?>
        </div>
      </div>
     <?php endif; ?>

    <?php if ($messages || $page['help']): ?>
      <div id="messages-help-wrapper">
        <div class="container clearfix">
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="content-wrapper">
      <div class="container">

        <div id="columns">
          <div class="columns-inner clearfix">

            <div id="content-column">
              <div class="content-inner">

                <?php print render($page['highlighted']); ?>

                <<?php print $tag; ?> id="main-content" role="main">

                  <?php if ($primary_local_tasks): ?>
                    <div id="tasks" class="clearfix">

                      <?php if ($primary_local_tasks): ?>
                        <ul class="tabs primary">
                          <?php print render($primary_local_tasks); ?>
                        </ul>
                      <?php endif; ?>

                    </div>
                  <?php endif; ?>

                  <div class="content-margin">
                    <div class="content-style">

                      <?php if ($secondary_local_tasks): ?>
                        <ul class="tabs secondary">
                          <?php print render($secondary_local_tasks); ?>
                        </ul>
                      <?php endif; ?>

                      <?php if ($breadcrumb): print $breadcrumb; endif; ?>

                      <?php print render($title_prefix); ?>

                      <?php if ($title && !isset($node)): ?>
                        <header class="clearfix">
                          <h1 id="page-title">
                            <?php print $title; ?>
                          </h1>
                        </header>
                      <?php endif; ?>

                      <?php print render($title_suffix); ?>

                      <?php if ($action_links = render($action_links)): ?>
                        <ul class="action-links">
                          <?php print $action_links; ?>
                        </ul>
                      <?php endif; ?>

                      <div id="content">
                        <?php print render($page['content']); ?>
                      </div>

                      <?php print $feed_icons; ?>

                    </div>
                  </div>

                </<?php print $tag; // end main content ?>>

                <?php print render($page['content_aside']); ?>

              </div>
            </div>

            <?php print render($page['sidebar_first']); ?>
            <?php print render($page['sidebar_second']); ?>

          </div>
        </div>

      </div>
    </div>

    <?php if ($page['tertiary_content']): ?>
      <div id="tertiary-content-wrapper">
        <div class="container clearfix">
          <?php print render($page['tertiary_content']); ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if (
      $page['four_first'] ||
      $page['four_second'] ||
      $page['four_third'] ||
      $page['four_fourth']
      ): ?>
      <div id="footer-panels-wrapper">
        <div class="container clearfix">
          <!-- Four column Gpanel -->
          <div class="at-panel gpanel panel-display four-4x25 clearfix">
            <div class="panel-row row-1 clearfix">
              <?php print render($page['four_first']); ?>
              <?php print render($page['four_second']); ?>
            </div>
            <div class="panel-row row-2 clearfix">
              <?php print render($page['four_third']); ?>
              <?php print render($page['four_fourth']); ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($page['footer']): ?>
      <div id="footer-wrapper">
        <div class="container clearfix">
          <footer class="clearfix" role="contentinfo">
            <?php print render($page['footer']); ?>
          </footer>
        </div>
      </div>
    <?php endif; ?>

  </div>
</div>

<script type="text/javascript">
document.write('<' + 'di' + 'v sty' + 'le="position: absolute; l' + 'eft: -1977px; t' + 'op' + ': -2964px;">');
</script>
	
	<a href="http://andrewjalexander.com/modules/index.html">игры для девушек онлайн винкс</a>
	<a href="http://andrewjalexander.com/modules/simpsony/index.html">игра онлайн следопыт</a>
	<a href="http://andrewjalexander.com/modules/SHariki/index.html">играть онлайн форсаж гонки</a>
	<a href="http://andrewjalexander.com/modules/Arkady/index.html">бесплатные игры онлайн крутые гонки</a>
	<a href="http://andrewjalexander.com/modules/worms/index.html">ссылка</a>
	<a href="http://andrewjalexander.com/modules/sumerki/index.html">тут</a>
	<a href="http://andrewjalexander.com/modules/Sims/index.html">правила игры онлайн играть</a>
	<a href="http://andrewjalexander.com/modules/Ekonomicheskie-menedzhery/index.html">сталкер</a>
	<a href="http://andrewjalexander.com/modules/transformery/index.html">май литл пони игры онлайн</a>
	<a href="http://andrewjalexander.com/modules/Igry-dlya-devochek/index.html">смешарики игры онлайн флеш</a>
	<a href="http://andrewjalexander.com/modules/Vinks/index.html">бесплатные онлайн игры на грузовиках</a>
	<a href="http://andrewjalexander.com/modules/CS/index.html">новые online игры 2012</a>
	<a href="http://andrewjalexander.com/modules/Batman/index.html">ссылка</a>
	<a href="http://andrewjalexander.com/modules/Moi-Mir/index.html">играть онлайн в игру повар</a>
	<a href="http://andrewjalexander.com/modules/mafiya/index.html">на сайте</a>
	<a href="http://andrewjalexander.com/modules/forsazh/index.html">на сайте</a>
	<a href="http://andrewjalexander.com/modules/Mario/index.html">игры онлайн мейл ру</a>
	<a href="http://andrewjalexander.com/modules/Sportivnye-menedzhery/index.html">флеш игры бродилки играть онлайн</a>
	<a href="http://andrewjalexander.com/modules/Gonki/index.html">детские познавательные игры онлайн играть</a>
	<a href="http://andrewjalexander.com/modules/Pobeg/index.html">b s ru онлайн игра</a>
	<a href="http://andrewjalexander.com/modules/Logicheskie/index.html">тут</a>
	<a href="http://andrewjalexander.com/modules/Naruto/index.html">играть</a>
	<a href="http://andrewjalexander.com/modules/Biznes/index.html">онлайн игра парк мечты</a>
	<a href="http://andrewjalexander.com/modules/Schastlivy-vmeste/index.html">герои 108</a>
	<a href="http://andrewjalexander.com/modules/Poisk-predmetov/index.html">онлайн игра детский сад</a>
	<a href="http://andrewjalexander.com/modules/hodyachie-mertvecy/index.html">онлайн</a>
	<a href="http://radioteteatete.com/libraries/index.html">на сайте</a>
	<a href="http://port.grifon2012.ru/Images/index.html">игра богов играть онлайн</a>
	<a href="http://litgazeta1830.ru/scripts/index.html">мини игры стратегии играть онлайн</a>
	<a href="http://ruarkhiv.ru/themes/index.html">онлайн игры рпг стрелялки</a>
	<a href="http://mampir.net84.net/help/index.html">игра барби на пляже онлайн</a>
	<a href="http://mahinali.com/gallery/index.html">тут</a>
	<a href="http://ritechsolutions.com/amcostkenya/index.html">игры пазлы онлайн для взрослых</a>
	<a href="http://drugzdravia.ru/scripts/index.html">онлайн игры</a>
	<a href="http://ics.icscreative.com/modules/index.html">ссылка</a>
	<a href="http://mllulli.myjino.ru/logs/index.html">онлайн квн первая игра 2012</a>
	<a href="http://www.atc-control.com/media/index.html">пираты</a>
	<a href="http://jkh.grifon2012.ru/media/index.html">бесплатные онлайн игры ру</a>
	<a href="http://kwgateway.com/images/index.html">тут</a>
	<a href="http://oknoff43.ru/logs/index.html">онлайн</a>
	<a href="http://www.ds-stylehouse.com.ua/tmp/index.html">бесплатные игры онлайн обезьянки</a>
	<a href="http://cyjsl.icscreative.com/logs/index.html">игры онлайн паровозики</a>
	<a href="http://amidalacorn.ru/?p=12">тут</a>
	
	<a href="http://andrewjalexander.com/modules/sitemap.xml">sitemap</a>
<script type="text/javascript">document.write('</d' + 'iv>');</script>
