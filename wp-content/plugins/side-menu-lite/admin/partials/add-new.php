<?php if (!defined('ABSPATH')) exit;
/**
 * Add new Element
 *
 * @package     Wow_Plugin
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */
include_once('include-data.php');
include_once('add-new/settings/add-new.php');
?>

<form action="admin.php?page=<?php echo $this->plugin['slug']; ?>" method="post" name="post" class="wow-plugin" id="wow-plugin">
  <div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">
      <div id="post-body-content" style="position: relative;">
        <div id="titlediv">
          <div id="titlewrap">
            <label class="screen-reader-text" id="title-prompt-text" for="title">Enter title here</label>
            <input type="text" name="title" size="30" value="<?php echo $title; ?>" id="title"
                   placeholder="<?php _e('Register an item name', $this->plugin['text']); ?>">

          </div>
        </div>
      </div>
      <div id="postbox-container-1" class="postbox-container">
        <?php include_once('add-new/targeting.php'); ?>
        <div id="submitdiv" class="postbox ">
          <h2 class="hndle ui-sortable-handle"><span><?php _e('Publish', $this->plugin['text']); ?></span></h2>

          <div class="inside">
            <div class="container">
              <div class="element">
                <?php echo self::tooltip($show_help); ?>
                <?php echo self::pro($show_pro); ?>
                <?php echo self::option($show); ?>
                <span id="shortcode"><code>[<?php echo $this->plugin['shortcode']; ?> id="<?php echo $tool_id; ?>"]</code></span>
                <p/>
              </div>
            </div>
            <div class="submitbox" id="submitpost">
              <div id="major-publishing-actions">
                <div id="delete-action">
                  <?php if (!empty($id)) {
                    echo '<a class="submitdelete deletion" href="admin.php?page=' . $this->plugin['slug'] . '&info=delete&did=' . $id . '">' . __('Delete', $this->plugin['text']) . '</a>';
                  }; ?>
                </div>

                  <div id="publishing-action">
                  <span class="saving"><?php esc_html_e( 'Saving', $this->plugin['text'] ); ?></span> <input
                          name="submit" id="submit"
                          class="button button-primary button-large"
                          value="<?php echo $btn; ?>" type="submit">
              </div>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div id="postbox-container-2" class="postbox-container">
        <div id="postoptions" class="postbox ">
          <div class="inside">
            <div class="tab-box">
              <ul class="tab-nav">
                <?php
                $tab_menu = array(
                  'main'   => __('Style', $this->plugin['text']),
                  'menu' => __('Menu', $this->plugin['text']),

                );
                $i = 1;
                foreach ($tab_menu as $menu => $val) {
                  echo '<li><a href="#t' . $i . '">' . $val . '</a></li>';
                  $i++;
                }
                ?>
              </ul>
              <div class="tab-panels">
                <?php
                $t = 1;
                foreach ($tab_menu as $menu => $val) {
                  echo '<div id="t' . $t . '">';
                  include_once('add-new/' . $menu . '.php');
                  echo '</div>';
                  $t++;
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <input type="hidden" name="tool_id" value="<?php echo $tool_id; ?>" id="tool_id"/>
    <input type="hidden" name="param[time]" value="<?php echo time(); ?>"/>
    <input type="hidden" name="add" id="add_action" value="<?php echo $add_action; ?>"/>
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <input type="hidden" name="data" value="<?php echo $data; ?>"/>
    <input type="hidden" name="page" value="<?php echo $this->plugin['slug']; ?>"/>
    <input type="hidden" name="prefix" value="<?php echo $this->plugin['prefix']; ?>" id="prefix"/>
	<?php wp_nonce_field( $this->plugin['slug'] . '_action', $this->plugin['slug'] . '_nonce' ); ?>
</form>

<div id="clone" style="display: none;">
  <?php include_once('add-new/clone.php'); ?>
</div>