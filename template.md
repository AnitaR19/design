use \Michelf\Markdown;

/**
 * Helper, Markdown formatting converting to HTML.
 *
 * @param string text The text to be converted.
 *
 * @return string the formatted text.
 */


function markdown($text)
{
    return Markdown::defaultTransform($text);
}
