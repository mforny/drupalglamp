<?php

namespace Drupal\fontyourface\Plugin\views\filter;

use Drupal\views\Plugin\views\filter\StringFilter;
use Drupal\Core\Form\FormStateInterface;

/**
 * Filter handler which allows to search based on font weight.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsFilter("fontyourface_font_weight")
 */
class FontYourFaceWeightFilter extends StringFilter {

  // Exposed filter options.
  protected $alwaysMultiple = TRUE;

  /**
   * Provide simple equality operator.
   */
  public function operators() {
    return [
      '=' => [
        'title' => $this->t('Is equal to'),
        'short' => $this->t('='),
        'method' => 'opEqual',
        'values' => 1,
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function valueForm(&$form, FormStateInterface $form_state) {
    $options = [
      'All' => '- Any -',
      '100' => $this->t('100'),
      '200' => $this->t('200'),
      '300' => $this->t('300'),
      '400' => $this->t('400 (Normal)'),
      '500' => $this->t('500'),
      '600' => $this->t('600'),
      '700' => $this->t('700 (Bold)'),
      '800' => $this->t('800'),
      '900' => $this->t('900'),
    ];

    $form['value'] = array(
      '#type' => 'select',
      '#title' => $this->t('Font Provider'),
      '#options' => $options,
      '#default_value' => $this->value,
    );

    if ($exposed = $form_state->get('exposed')) {
      $identifier = $this->options['expose']['identifier'];
      $user_input = $form_state->getUserInput();
      if (!isset($user_input[$identifier])) {
        $user_input[$identifier] = $this->value;
        $form_state->setUserInput($user_input);
      }
    }
  }

}
