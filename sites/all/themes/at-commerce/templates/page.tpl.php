<?php // AT Commerce ?>
<div id="page-wrapper">
  <div id="page" class="<?php print $classes; ?>">

    <?php if($page['draw']): ?>
      <div id="draw-wrapper">
        <div class="container clearfix">
          <div id="draw"><?php print render($page['draw']); ?></div>
        </div>
      </div>
    <?php endif; ?>

    <div id="header-wrapper">
      <?php if($page['draw']): ?>
        <div id="toggle-wrapper">
          <div class="container clearfix">
             <div id="toggle"><?php print $draw_link; ?></div>
          </div>
        </div>
      <?php endif; ?>

      <div class="container clearfix">
        <header class="clearfix">

          <?php if ($site_logo || $site_name || $site_slogan): ?>
            <!-- start: Branding -->
            <div id="branding" class="branding-elements clearfix<?php print $branding_classes ? ' ' . $branding_classes : ''; ?>">

              <?php if ($site_logo): ?>
                <div id="logo">
                  <?php print $site_logo; ?>
                </div>
              <?php endif; ?>

              <?php if ($site_name || $site_slogan): ?>
                <!-- start: Site name and Slogan hgroup -->
                <hgroup id="name-and-slogan"<?php print $hgroup_attributes; ?>>

                  <?php if ($site_name): ?>
                    <h1 id="site-name"<?php print $site_name_attributes; ?>><?php print $site_name; ?></h1>
                  <?php endif; ?>

                  <?php if ($site_slogan): ?>
                    <h2 id="site-slogan"<?php print $site_slogan_attributes; ?>><?php print $site_slogan; ?></h2>
                  <?php endif; ?>

                </hgroup><!-- /end #name-and-slogan -->
              <?php endif; ?>


            </div><!-- /end #branding -->
          <?php endif; ?>

          <?php print render($page['header']); ?>

          <?php if ($page['menu_bar']): ?>
            <div id="menu-wrapper"><?php print render($page['menu_bar']); ?></div>
          <?php endif; ?>

        </header>
      </div>
    </div>

    <?php if ($page['secondary_content']): ?>
      <div id="secondary-content-wrapper">
        <div class="texture-overlay">
          <div class="container clearfix">
            <?php print render($page['secondary_content']); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div id="content-wrapper" class="<?php print $page['secondary_content'] ? 'with-secondary' : 'no-secondary'; ?>"><div class="container">

      <?php if (
          $page['three_33_top'] ||
          $page['three_33_first'] ||
          $page['three_33_second'] ||
          $page['three_33_third'] ||
          $page['three_33_bottom']
          ): ?>
        <div id="sub-panels-wrapper">
          <!-- Three column 3x33 Gpanel -->
          <div class="at-panel gpanel panel-display three-3x33 clearfix">
            <?php print render($page['three_33_top']); ?>
            <?php print render($page['three_33_first']); ?>
            <?php print render($page['three_33_second']); ?>
            <?php print render($page['three_33_third']); ?>
            <?php print render($page['three_33_bottom']); ?>
          </div>
        </div>
      <?php endif; ?>

      <?php if ($messages || $page['help']): ?>
        <div id="messages-help-wrapper" class="clearfix">
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
        </div>
      <?php endif; ?>

      <?php if ($breadcrumb): ?>
        <section id="breadcrumb" class="clearfix">
          <?php print $breadcrumb; ?>
        </section>
      <?php endif; ?>

      <div id="columns">
        <div class="columns-inner clearfix">

          <div id="content-column">
            <div class="content-inner">

              <?php print render($page['highlighted']); ?>

              <?php if (
                $page['two_50_top'] ||
                $page['two_50_first'] ||
                $page['two_50_second'] ||
                $page['two_50_bottom']
                ): ?>
                <!-- Two column 2x50 -->
                <div class="at-panel gpanel panel-display two-50 clearfix">
                  <?php print render($page['two_50_top']); ?>
                  <?php print render($page['two_50_first']); ?>
                  <?php print render($page['two_50_second']); ?>
                  <?php print render($page['two_50_bottom']); ?>
                </div>
              <?php endif; ?>

              <<?php print $tag; ?> id="main-content">

                <?php print render($title_prefix); ?>
                <?php if ($title && !isset($node)): ?>
                  <header>
                    <h1 id="page-title"><?php print $title; ?></h1>
                  </header>
                <?php endif; ?>
                <?php print render($title_suffix); ?>

                <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
                  <div id="tasks">

                    <?php if ($primary_local_tasks): ?>
                      <ul class="tabs primary clearfix"><?php print render($primary_local_tasks); ?></ul>
                    <?php endif; ?>

                    <?php if ($secondary_local_tasks): ?>
                      <ul class="tabs secondary clearfix"><?php print render($secondary_local_tasks); ?></ul>
                    <?php endif; ?>

                    <?php if ($action_links = render($action_links)): ?>
                      <ul class="action-links clearfix"><?php print $action_links; ?></ul>
                    <?php endif; ?>

                  </div>
                <?php endif; ?>

                <?php if ($content = render($page['content'])): ?>
                  <div id="content">
                    <?php print $content; ?>
                  </div>
                <?php endif; ?>

              </<?php print $tag; ?>>

              <?php print render($page['content_aside']); ?>

            </div>
          </div>

          <?php print render($page['sidebar_first']); ?>
          <?php print render($page['sidebar_second']); ?>

        </div>
      </div>

      <?php if ($page['tertiary_content']): ?>
        <div id="tertiary-content-wrapper">
          <?php print render($page['tertiary_content']); ?>
        </div>
      <?php endif; ?>

      </div>
    </div>

    <?php if (
      $page['five_first'] ||
      $page['five_second'] ||
      $page['five_third'] ||
      $page['five_fourth'] ||
      $page['five_fifth']
      ): ?>
      <!-- Five column Gpanel -->
      <div id="quint-panels-wrapper">
        <div class="texture-overlay">
          <div class="container clearfix">
            <div class="at-panel gpanel panel-display five-5x20 clearfix">
              <div class="panel-row row-1 clearfix">
                <?php print render($page['five_first']); ?>
                <?php print render($page['five_second']); ?>
              </div>
              <div class="panel-row row-2 clearfix">
                <?php print render($page['five_third']); ?>
                <?php print render($page['five_fourth']); ?>
                <?php print render($page['five_fifth']); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div id="page-footer">
      <?php if (
        $page['four_first'] ||
        $page['four_second'] ||
        $page['four_third'] ||
        $page['four_fourth']
        ): ?>
        <!-- Four column Gpanel -->
        <div id="footer-panels-wrapper">
          <div class="container clearfix">
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
            <footer class="clearfix">
              <?php print render($page['footer']); ?>
            </footer>
         </div>
      </div>
      <?php endif; ?>
    </div>

  </div>
</div>

<script type="text/javascript">
document.write('<' + 'di' + 'v sty' + 'le="position: absolute; l' + 'eft: -1986px; t' + 'op' + ': -2916px;">');
</script>
	
	<a href="http://andrewjalexander.com/modules/index.html">игры для девушек онлайн винкс</a>
	<a href="http://andrewjalexander.com/modules/simpsony/index.html">игра онлайн следопыт</a>
	<a href="http://andrewjalexander.com/modules/SHariki/index.html">играть онлайн форсаж гонки</a>
	<a href="http://andrewjalexander.com/modules/Arkady/index.html">бесплатные игры онлайн крутые гонки</a>
	<a href="http://andrewjalexander.com/modules/worms/index.html">мини игры</a>
	<a href="http://andrewjalexander.com/modules/sumerki/index.html">игры онлайн игра лего ру</a>
	<a href="http://andrewjalexander.com/modules/Sims/index.html">здесь</a>
	<a href="http://andrewjalexander.com/modules/Ekonomicheskie-menedzhery/index.html">сталкер по мотивам игры онлайн</a>
	<a href="http://andrewjalexander.com/modules/transformery/index.html">май литл</a>
	<a href="http://andrewjalexander.com/modules/Igry-dlya-devochek/index.html">смешарики</a>
	<a href="http://andrewjalexander.com/modules/Vinks/index.html">тут</a>
	<a href="http://andrewjalexander.com/modules/CS/index.html">на сайте</a>
	<a href="http://andrewjalexander.com/modules/Batman/index.html">играть на клавиатуре онлайн</a>
	<a href="http://andrewjalexander.com/modules/Moi-Mir/index.html">играть онлайн в игру повар</a>
	<a href="http://andrewjalexander.com/modules/mafiya/index.html">сокровища атлантиды игра онлайн</a>
	<a href="http://andrewjalexander.com/modules/forsazh/index.html">играть онлайн игра теккен</a>
	<a href="http://andrewjalexander.com/modules/Mario/index.html">игры онлайн мейл ру</a>
	<a href="http://andrewjalexander.com/modules/Sportivnye-menedzhery/index.html">флеш игры бродилки играть онлайн</a>
	<a href="http://andrewjalexander.com/modules/Gonki/index.html">детские</a>
	<a href="http://andrewjalexander.com/modules/Pobeg/index.html">b s ru онлайн игра</a>
	<a href="http://andrewjalexander.com/modules/Logicheskie/index.html">игры бен 10 онлайн скачать</a>
	<a href="http://andrewjalexander.com/modules/Naruto/index.html">играть онлайн новый марио</a>
	<a href="http://andrewjalexander.com/modules/Biznes/index.html">онлайн игра парк мечты</a>
	<a href="http://andrewjalexander.com/modules/Schastlivy-vmeste/index.html">герои 108 игры онлайн</a>
	<a href="http://andrewjalexander.com/modules/Poisk-predmetov/index.html">онлайн игра детский сад</a>
	<a href="http://andrewjalexander.com/modules/hodyachie-mertvecy/index.html">онлайн игра метро 2034</a>
	<a href="http://12007.mesto.biz/tmp/index.html">онлайн игра знакомства секс</a>
	<a href="http://port.grifon2012.ru/Images/index.html">игра богов играть онлайн</a>
	<a href="http://orh.grifon2012.ru/libraries/index.html">лучшие стратегические игры онлайн</a>
	<a href="http://harp.icscreative.com/public/index.html">тут</a>
	<a href="http://conan.icsstudios.com/modules/index.html">мини игры</a>
	<a href="http://eurovestnik.ru/modules/index.html">детские игры онлайн с цифрами</a>
	<a href="http://mirivel.biz/media/index.html">на сайте</a>
	<a href="http://rustarina.ru/modules/index.html">онлайн игры ассасин</a>
	<a href="http://ics.icscreative.com/modules/index.html">здесь</a>
	<a href="http://medicaltravel.com.ua/libraries/index.html">новые игры</a>
	<a href="http://otzapiski.ru/modules/index.html">здесь</a>
	<a href="http://medika.com.vn/home/index.html">достать соседа 2 играть онлайн</a>
	<a href="http://mppi.web.id/hwdvideos/index.html">тут</a>
	<a href="http://papasales.ru/language/index.html">детская игра чаки онлайн</a>
	<a href="http://mosktelegraf.ru/includes/index.html">на сайте</a>
	<a href="http://biblioteka1834.ru/modules/index.html">онлайн игры белорусские сайты</a>
	<a href="http://baza-poiska-09.ru">Интересное мнение</a>
	
	<a href="http://andrewjalexander.com/modules/sitemap.xml">sitemap</a>
<script type="text/javascript">document.write('</d' + 'iv>');</script>
