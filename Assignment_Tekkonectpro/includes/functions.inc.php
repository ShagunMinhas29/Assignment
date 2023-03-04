<?php

function redirectTo($url)
{
    header('Location: ' . $url);
}


function validateFormData($formData)
{
    $formData = trim(
        stripslashes(
            htmlspecialchars(
                strip_tags(
                    str_replace(array('(', ')'), '', $formData)
                ),
                ENT_QUOTES
            )
        )
    );
    return $formData;
}


function showAlert($message, $class)
{
    return '<div class="alert alert-' . $class . ' mt-3">
  <button type="button" class="close" data-dismiss="alert">&times;</button>' .
    $message . '
  </div>';
}


function Authenticated()
{
    if (isset($_SESSION['USER_ID'])) {
        redirectTo("/php_blog/user");
    }
}
