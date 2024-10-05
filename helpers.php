<?php


/**
 * Trims content to be only 150 chars
 * 
 * @param string $text
 * @return string
 */
function trimContent($text)
{
    $maxLength = 150;

    if (strlen($text) > $maxLength) {
        return substr($text, 0, $maxLength) . '...';
    }

    return $text;
}


/**
 * Get the base path
 *
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}


/**
 * Load a view
 *
 * @param $name
 * @param array $data
 * @return void
 */
function loadView($name, $data = [])
{
    $viewPath = basePath("App/views/{$name}.view.php");

    if (file_exists($viewPath)) {

        extract($data);

        require_once $viewPath;
    } else {
        echo "view '{$name} not found'";
    }
}


/**
 * Load a partial
 *
 * @param string $name
 * @return void
 */
function loadPartial($name)
{
    $partialPath = basePath("App/views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require_once $partialPath;
    } else {
        echo "view '{$name} not found'";
    }
}


/**
 * Inspect a value(s)
 *
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}


/**
 * Inspect a value(s) and die
 *
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
}


/**
 * Sanitize Data
 * 
 * @param string $dirty
 * @return void
 */
function sanitize($dirty)
{
    return filter_var($dirty, FILTER_SANITIZE_SPECIAL_CHARS);
}


/**
 * Redirect a page
 * 
 * @param string $url
 * @param string $message
 * @return void
 */
function redirect($url, $message = '')
{
    header("Location: {$url}");
    exit;
}
