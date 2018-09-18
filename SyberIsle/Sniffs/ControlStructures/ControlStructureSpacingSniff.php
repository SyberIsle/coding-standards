<?php

/**
 * Control Structure Specing Sniff
 *
 * Used to put the control structures in their own blocks.
 *
 * ```php
 * try { ... }
 * catch { ... }
 * finally { ... }
 *
 * if { ... }
 * elseif { ... }
 * else { ... }
 *
 * do {
 * ...
 * } while (...);
 * ```
 */

namespace SyberIsle\Sniffs\ControlStructures;

class ControlStructureSpacingSniff
	extends \PHP_CodeSniffer\Sniffs\AbstractPatternSniff
{
	/**
	 * If true, comments will be ignored if they are found in the code.
	 *
	 * @var boolean
	 */
	public $ignoreComments = true;

	/**
	 * Returns the patterns that this test wishes to verify.
	 *
	 * @return string[]
	 */
	protected function getPatterns()
	{
		return array(
			'try {EOL...}EOL',
			'}EOLcatch (...) {EOL...}EOL',
			'}EOLfinally {EOL...}EOL',
			'do {EOL',
			'do {EOL...EOL} while (...);EOL',
			'while (...) {EOL',
			'for (...) {EOL',
			'if (...) {EOL',
			'foreach (...) {EOL',
			'}EOLelseif (...) {EOL',
			'}EOLelse {EOL'
		);
	}
}