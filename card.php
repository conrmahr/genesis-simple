<?php $user_info = get_userdata(1); ?>

  <div class="profile-card p-author h-card vcard">
      <div class="wrap">
        <?php echo get_avatar( 1, 128 ); ?>
        <h2 class="p-name fn">
          <a class="u-url url" href="<?php echo $user_info->user_url; ?>"><?php echo $user_info->display_name; ?></a>
        </h2>

        <p class="p-note note">
          <?php echo $user_info->description; ?>
        </p>

        <ul class="social-links">
          <?php wp_list_bookmarks('title_li=&categorize=0&orderby=link_id'); ?>
        </ul>

      </div>
  </div>