<h2><img class="favorite" src="<?php echo SITE_URL; ?>img/star-off.png"/ title="<?php echo LANG_STAR_TITLE?>" ad_id="<?php echo ($this->ad['id']); ?>">&nbsp;<?php echo ($this->ad['subject']); ?><?php echo  (!empty($this->ad['location']))? (' ('.$this->ad['location'].')'):''?></h2>		