<?php
function mZ_mindbody_activation ()
{
  add_action('wp_loaded', function () {
			require_once(MZ_MINDBODY_SCHEDULE_DIR .'inc/mz_mbo_init.inc');
			$mz_mbo = new MZ_MBO_Init();
		});

  $data = $mb->GetActivationCode();
  $return = $mb->debug();

  return $return;

}//EOF mZ_mindbody_activation
