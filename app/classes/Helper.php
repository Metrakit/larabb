<?php
class Helper {

	/**
	 * Concat a text with a value
	 * @param  string $text
	 * @param  mixed $value
	 * @param  string $file
	 * @return string
	 */
    public static function concat($text, $value, $file = "text") {
        return sprintf(Lang::get($file . '.' . $text), $value);
    }

}