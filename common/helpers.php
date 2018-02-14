<?php
/**
 * Yii2 Shortcuts
 * @author Eugene Terentev <eugene@terentev.net>
 * -----
 * This file is just an example and a place where you can add your own shortcuts,
 * it doesn't pretend to be a full list of available possibilities
 * -----
 */

/**
 * @return int|string
 */
function getMyId()
{
    return Yii::$app->user->getId();
}

/**
 * @param string $view
 * @param array $params
 * @return string
 */
function render($view, $params = [])
{
    return Yii::$app->controller->render($view, $params);
}

/**
 * @param $url
 * @param int $statusCode
 * @return \yii\web\Response
 */
function redirect($url, $statusCode = 302)
{
    return Yii::$app->controller->redirect($url, $statusCode);
}

/**
 * @param string $key
 * @param mixed $default
 * @return mixed
 */
function env($key, $default = null)
{

    $value = getenv($key);

    if ($value === false) {
        return $default;
    }

    switch (strtolower($value)) {
        case 'true':
        case '(true)':
            return true;

        case 'false':
        case '(false)':
            return false;
    }
    
    return $value;
}
/**
 * <pre>Content</pre>
 * @param mixed $m arrray or object to debug
 * @return mixed pre_dumper
 */
function pre(...$m) {
    $_data = [];
    foreach($m as $t) {
        $_data[] = $t;
    }
    echo "<pre>";print_r($_data);echo"</pre>";die();
}
/**
 * <pre>Content</pre>
 * @param mixed $m arrray or object to debug
 * @return mixed var_dumper
 */
function vd(...$m) {
    $_data = [];
    foreach($m as $t) {
        $_data[] = $t;
    }
    echo "<pre>";var_dump($_data);echo"</pre>";die();
}