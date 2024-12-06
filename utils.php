<?php


/**
 * Generates a base path by concatenating the given path segments with the base directory.
 * Used for client-side
 *
 * @param string ...$path One or more path segments to be appended to the base directory.
 * @return string The generated base path.
 *
 * @example
 * // Returns '/SE-test/images/photo.jpg'
 * echo base_path('images', 'photo.jpg');
 *
 * @example
 * // Returns '/SE-test/css/style.css'
 * echo base_path('css', 'style.css');
 */
function base_path(...$path)
{
    return '/SE-test/' . implode('/', $path);
}


/**
 * Constructs a file path by concatenating the directory of the current file with the provided path segments.
 * Used for server-side
 *
 * @param string ...$path The path segments to be concatenated.
 * @return string The constructed file path.
 */

function base_import(...$path)
{
    return __DIR__ . '/' . implode('/', $path);
}

/**
 * Generates the full path to an image file located in the 'resources/img' directory.
 *
 * @param string ...$path One or more path segments to be appended to the base image directory.
 * @return string The full path to the specified image file.
 */
function get_image(...$path)
{
    return base_path('resources/img', ...$path);
}