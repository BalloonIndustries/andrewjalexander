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

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">
        <?php if ($site_name): ?>
            <div id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><h3><?php print $site_name; ?></h3></a>
       </div>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div><!-- /#name-and-slogan -->
    <?php endif; ?>

    <div id="usermenulinks"><?php print theme('links__system_secondary_menu', array(
      'links' => $secondary_menu,
      'attributes' => array(
        'id' => 'secondary-menu',
        'class' => array('links', 'inline', 'clearfix'),
      ),
      'heading' => array(
        'text' => $secondary_menu_heading,
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    )); ?></div>

    <?php print render($page['header']); ?>

  </div></div><!-- /.section, /#header -->


  <div id="main-wrapper"><div id="main" class="clearfix<?php if ($main_menu || $page['navigation']) { print ' with-navigation'; } ?>">

    <div id="content" class="column"><div class="resume-section">
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
      <?php endif; ?><div id="contentbody">
      <?php /*print render($page['content']);*/ ?>
	  
<div class="resume clearfix">
        <dl>
		
		            <dt id="contactdt">Contact</dt>
            <dd>
                <h4>Andrew Alexander</h4>
                <p>andrew.j.alexander@gmail.com<br />
                   734-945-7337<br />
				   Located in the Ann Arbor area</p>
            </dd>
			
			            <dd class="clear"></dd>
		
            <dt>Education</dt>
            <dd>
                <h4>Eastern Michigan University</h4>
                <p><strong>Major:</strong> Psychology<br />
                   <strong>Minor:</strong> Philosophy</p>
		<p>Presented - OSU Undergraduate Philosophy Conference, May 2009<br />
University Honors - Winter 2004, Winter 2006, Winter 2007, Fall 2008<br />
AP Scholar with Distinction - Awarded June 2003</p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt id="experiencedt">Experience</dt>

            <dd>
              
              <h4>Switchback CMS - January 2014 to Present</h4>

<strong>Final Position: Drupal Developer</strong>

<ul>
	<li>Developed primarily in PHP and Javascript for Drupal CMS</li>
        <li>Operated in LAMP environment</li>
</ul>

<h4>Media Genesis - October 2011 to January 2014</h4>

<strong>Final Position: Drupal Developer</strong>

<ul>
	<li>Technical support to medium-size (40) business</li>
	<li>Developed primarily in PHP and Javascript for the Drupal CMS</li>
	<li>Maintained computer infrastructure - construction, deployment, etc</li>
	<li>Operated in LAMP environment</li>
</ul>

<h4>Benzinga.com - August 2010 to October 2011</h4>

<strong>Final Position: Director of Technology and Marketing</strong>

<ul>
	<li>Provided tier 3 technical support to a growing start-up with 100,000 daily readership and 1.5 million monthly readership</li>
	<li>Supervised content distribution and editorial work</li>
	<li>Managed an audio/video team, allowing broadcasting to thousands of potential users interviews with VIPs</li>
	<li>Pioneered a new audio recording system for the company, allowing far greater audio quality</li>
	<li>Managed partner and customer database, including modification, deployment, etc on the Force.com/Salesforce platform</li>
	<li>Part of a team that grew a company from three individuals to twenty five individuals in less than a year</li>
	<li>Developed several back end tools in Python for the company</li>
</ul>

<h4>Stoneman Volk Patent Group - July 2009 to June 2010</h4>

<strong>Final Position: IP Paralegal/IT</strong>

<ul>
	<li>Oversaw two most critical databases for an entire law office</li>
	<li>Managed and directed marketing for the firm</li>
	<li>Created IT policy and implemented it. Dealt with problems as necessary</li>
	<li>Technical/patent writing for clients, turning a gross profit of over $10,000 per patent</li>
</ul>

<h4>EMU Psychology Lab - September 2007 to August 2008</h4>

<strong>Final Position: Lab Manager</strong>

<h4>EMU Psychology Department - January 2008 to May 2008</h4>

<strong>Final Position: Student Assistant</strong>

<ul>
	<li>Handled IT and technical support problems as well as general office problems</li>
</ul>
            </dd>
			
			            <dd class="clear"></dd>
			
						<dt>Skills</dt>
				<dd>

			<ul>
	<li>Drupal 6 &amp; Drupal 7 development, Wordpress 3 development</li>
	<li>Python, PHP, Javascript/jQuery, Twitter API, JSON &amp; XML, HTML/CSS, MySQL &amp; MSSQL, SVN/GIT</li>
	<li>Office, Photoshop</li>
	<li>Computer assembly and IT support</li>
</ul>
			</dd>
			</dl>
    
    </div>
	  
	  
	  </div>

      <?php print $feed_icons; ?>
    </div></div><!-- /.section, /#content -->





    <?php print render($page['sidebar_first']); ?>

    <?php print render($page['sidebar_second']); ?>

  </div></div><!-- /#main, /#main-wrapper -->
  


  <?php print render($page['footer']); ?>
  
  <div id="contact">
  <span id="contactinfo">Contact Info:</span>
  <span class="icon"><a target="_blank" href="http://www.facebook.com/andrew.alexander"><img id="fbicon" src="http://www.andrewjalexander.com/sites/all/themes/andy/images/fb.png" style="height:48px;width:48px"/></a></span>
  <span class="icon"><a target="_blank" href="http://www.linkedin.com/pub/andrew-alexander/14/34/a33"><img id="linkedinicon" src="http://www.andrewjalexander.com/sites/all/themes/andy/images/linkedin.png" style="height:48px;width:48px"/></a></span>
  <span class="icon"><a target="_blank" href="https://plus.google.com/109646240885561617251/posts"><img id="googleplusicon" src="http://www.andrewjalexander.com/sites/all/themes/andy/images/google+.png" style="height:48px;width:48px"/></a></span>
  <span class="icon"><a target="_blank" href="https://www.youtube.com/channel/UCoYHoKKtbYtfEtNqOCqEIOA"><img id="youtubeicon" src="http://www.andrewjalexander.com/sites/all/themes/andy/images/youtube.png" style="height:48px;width:48px"/></a></span>
  <span class="icon"><a target="_blank" href="https://twitter.com/NufiosNews"><img id="twittericon" src="http://www.andrewjalexander.com/sites/all/themes/andy/images/twitter.png" style="height:48px;width:48px"/></a></span>
  <span class="icon"><a target="_blank" href="http://www.andrewjalexander.com/contact"><img id="emailicon" src="http://www.andrewjalexander.com/sites/all/themes/andy/images/email.png" style="height:48px;width:48px"/></a></span>
  </div>



</div></div><!-- /#page, /#page-wrapper -->

<?php print render($page['bottom']); ?>
