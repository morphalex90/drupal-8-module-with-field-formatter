<?php
/**
 * @file
 * Contains \Drupal\iframe_formatter\Plugin\Field\FieldFormatter\MakeIframe.
 */

namespace Drupal\iframe_formatter\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Field formatter from transforming an embed url to an iframe
 *
 * @FieldFormatter (
 *   id = "MakeIframe",
 *   label = @Translation("Iframe from embed url"),
 *   field_types = {
*     "string"
*   },
 * )
 */
class MakeIframe extends FormatterBase {
	/**
	 * {@inheritdoc}
	 */
	public function viewElements(FieldItemListInterface $items, $langcode) {
	  $elements = array();

	  foreach ($items as $delta => $item) {
		$value = $item->value;
		$elements[$delta] = array(
		  '#theme' => 'make_iframe_formatter',
		  '#value' => $value,
		);
	  }
	  return $elements;
	}
}