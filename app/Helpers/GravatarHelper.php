<?php
namespace App\Helpers;
/*
* Gravatar Helper
*/
class GravatarHelper
{
  /**
  * Gravatar Helper
  *
  *
  * Check Imail has any gravatar image or note
  *
  *
  */
  public static function validate_gravatar($email)
  {
    $hash = md5($email);
    $uri = 'http://www.gravatar.com/avatar/' .$hash. '?d=404';
    $headers = @get_headers($uri);
    if (!preg_match("|200|",$headers[0])) {
      $has_valid_avatar = FALSE;
    }else {
      $has_valid_avatar = True;
    }
    return $has_valid_avatar;
  }
  /*
  * Gravatar Image
  */
  public static function gravatar_image($email, $size=0, $d="")
  {
    $hash = md5($email);
    $image_url = 'http://www.gravatar.com/avatar/' .$hash. '?s=' .$size. '&d=' .$d;
    return $image_url;
  }
}
