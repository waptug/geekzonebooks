<?php
$vars = get_defined_vars();
$view = get_artx_drupal_view();
$view->print_maintenance_head($vars);
if (isset($page))
foreach (array_keys($page) as $name)
$$name = & $page[$name];
$art_sidebar_left = isset($sidebar_left) && !empty($sidebar_left) ? $sidebar_left : NULL;
$art_sidebar_right = isset($sidebar_right) && !empty($sidebar_right) ? $sidebar_right : NULL;
if (!isset($vnavigation_left)) $vnavigation_left = NULL;
if (!isset($vnavigation_right)) $vnavigation_right = NULL;
$tabs = (isset($tabs) && !(empty($tabs))) ? '<ul class="arttabs_primary">'.render($tabs).'</ul>' : NULL;
$tabs2 = (isset($tabs2) && !(empty($tabs2))) ?'<ul class="arttabs_secondary">'.render($tabs2).'</ul>' : NULL;
?>

<div id="art-main">
<header class="art-header"><?php if (!empty($art_header)) { echo render($art_header); } ?>


    <div class="art-shapes">
<div class="art-object0" data-left="50%"></div>
<div class="art-object1481438740" data-left="0.18%"></div>
<div class="art-object781250976" data-left="67.69%"></div>
<div class="art-object3960003" data-left="81.63%"></div>
<div class="art-object1255122758" data-left="95.37%"></div>

            </div>
<?php if (!empty($site_name)) : ?>
<?php if (!$title) : ?>
<h1 class="art-headline" data-left="17.81%"><a href="<?php echo check_url($front_page); ?>" title = "<?php echo $site_name; ?>"><?php echo $site_name;  ?></a></h1><?php else : ?>
<div class="art-headline">
  <a href="<?php echo check_url($front_page); ?>" title = "<?php echo $site_name; ?>"><?php echo $site_name;  ?></a>
</div>
<?php endif; ?>
<?php endif; ?>

<?php if (!empty($site_slogan)) : ?>
<h2 class="art-slogan" data-left="11.79%"><?php echo $site_slogan; ?>
</h2><?php endif; ?>





                        
                    
</header>
<?php if (!empty($navigation) || !empty($extra1) || !empty($extra2)): ?>
<nav class="art-nav">
    <div class="art-nav-inner">
     
        <?php if (!empty($extra1)) : ?>
<div class="art-hmenu-extra1"><?php echo render($extra1); ?></div>
<?php endif; ?>
<?php if (!empty($extra2)) : ?>
<div class="art-hmenu-extra2"><?php echo render($extra2); ?></div>
<?php endif; ?>
<?php if (!empty($navigation)) : ?>
<?php echo render($navigation); ?>
<?php endif; ?>
</div>
    </nav><?php endif; ?>

<div class="art-sheet clearfix">
            <?php if (!empty($banner1)) { echo '<div id="banner1">'.render($banner1).'</div>'; } ?>
<?php echo art_placeholders_output(render($top1), render($top2), render($top3)); ?>
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><?php if (!empty($banner2)) { echo '<div id="banner2">'.render($banner2).'</div>'; } ?>
<?php if ((!empty($user1)) && (!empty($user2))) : ?>
<table class="position" cellpadding="0" cellspacing="0" border="0">
<tr valign="top"><td class="half-width"><?php echo render($user1); ?></td>
<td><?php echo render($user2); ?></td></tr>
</table>
<?php else: ?>
<?php if (!empty($user1)) { echo '<div id="user1">'.render($user1).'</div>'; }?>
<?php if (!empty($user2)) { echo '<div id="user2">'.render($user2).'</div>'; }?>
<?php endif; ?>
<?php if (!empty($banner3)) { echo '<div id="banner3">'.render($banner3).'</div>'; } ?>

<?php if (!empty($breadcrumb)): ?>
<article class="art-post art-article">
                                
                                                
                <div class="art-postcontent"><?php { echo $breadcrumb; } ?>
</div>
                                
                

</article><?php endif; ?>
<?php $art_post_position = strpos(render($content), "art-postcontent"); ?>
<?php if (($is_front) || (isset($node) && isset($node->nid))): ?>

<?php if (!empty($tabs) || !empty($tabs2)): ?>
<article class="art-post art-article">
                                
                                                
                <div class="art-postcontent"><?php if (!empty($tabs)) { echo $tabs.'<div class="cleared"></div>'; }; ?>
<?php if (!empty($tabs2)) { echo $tabs2.'<div class="cleared"></div>'; } ?>
</div>
                                
                

</article><?php endif; ?>

<?php if (!empty($mission) || !empty($help) || !empty($messages) || !empty($action_links)): ?>
<article class="art-post art-article">
                                
                                                
                <div class="art-postcontent"><?php if (isset($mission) && !empty($mission)) { echo '<div id="mission">'.$mission.'</div>'; }; ?>
<?php if (!empty($help)) { echo render($help); } ?>
<?php if (!empty($messages)) { echo $messages; } ?>
<?php if (isset($action_links) && !empty($action_links)): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
</div>
                                
                

</article><?php endif; ?>

<?php if ($art_post_position === FALSE): ?>
<article class="art-post art-article">
                                
                                                
                <div class="art-postcontent"><?php endif; ?>
<?php echo art_content_replace(render($content)); ?>
<?php if ($art_post_position === FALSE): ?>
</div>
                                
                

</article><?php endif; ?>

<?php else: ?>

<article class="art-post art-article">
                                
                                                
                <div class="art-postcontent"><?php print render($title_prefix); ?>
<?php if (!empty($title)): print '<h1'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h1>'; endif; ?>
<?php print render($title_suffix); ?>
<?php if (!empty($tabs)) { echo $tabs.'<div class="cleared"></div>'; }; ?>
<?php if (!empty($tabs2)) { echo $tabs2.'<div class="cleared"></div>'; } ?>
<?php if (isset($mission) && !empty($mission)) { echo '<div id="mission">'.$mission.'</div>'; }; ?>
<?php if (!empty($help)) { echo render($help); } ?>
<?php if (!empty($messages)) { echo $messages; } ?>
<?php if (isset($action_links) && !empty($action_links)): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
<?php if ($art_post_position): ?>
      </div>
    </article>
  <?php echo art_content_replace(render($content)); ?>
<?php else: ?>
  <?php echo art_content_replace(render($content)); ?>
</div>
                                
                

</article>
<?php endif; ?>
<?php endif; ?>

<?php if (!empty($banner4)) { echo '<div id="banner4">'.render($banner4).'</div>'; } ?>
<?php if ((!empty($user3)) && (!empty($user4))) : ?>
<table class="position" cellpadding="0" cellspacing="0" border="0">
<tr valign="top"><td class="half-width"><?php echo render($user3); ?></td>
<td><?php echo render($user4); ?></td></tr>
</table>
<?php else: ?>
<?php if (!empty($user3)) { echo '<div id="user3">'.render($user3).'</div>'; }?>
<?php if (!empty($user4)) { echo '<div id="user4">'.render($user4).'</div>'; }?>
<?php endif; ?>
<?php if (!empty($banner5)) { echo '<div id="banner5">'.render($banner5).'</div>'; } ?>
</div>
                        <?php if (!empty($art_sidebar_left) || !empty($vnavigation_left)) : ?>
<div class="art-layout-cell art-sidebar1"><?php echo render($vnavigation_left); ?>
<?php echo render($art_sidebar_left); ?>
</div><?php endif; ?>
                    </div>
                </div>
            </div><?php echo art_placeholders_output(render($bottom1), render($bottom2), render($bottom3)); ?>
<?php if (!empty($banner6)) { echo '<div id="banner6">'.render($banner6).'</div>'; } ?>
<footer class="art-footer"><?php
$footer = render($footer_message);
if (isset($footer) && !empty($footer) && (trim($footer) != '')) { echo $footer; } // From Drupal structure
elseif (!empty($art_footer) && (trim($art_footer) != '')) { echo $art_footer; } // From Artisteer Content module
else { // HTML from Artisteer preview
ob_start(); ?>

<a title="RSS" class="art-rss-tag-icon" style="position: absolute; bottom: 10px; left: 6px; line-height: 36px;" href="<?php echo $base_path?>rss.xml"></a>
<div style="position:relative;padding-left:10px;padding-right:10px"><br>
Copyright © 2011. All Rights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">About</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms of Use</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Contacts</a><br>
<br></div>
<?php
  $footer = str_replace('%YEAR%', date('Y'), ob_get_clean());
  echo art_replace_image_path($footer);
}
?>
<?php if (!empty($copyright)) { echo '<div id="copyright">'.render($copyright).'</div>'; } ?>
</footer>

    </div>
</div>


<?php $view->print_closure($vars); ?>
