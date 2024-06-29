<?php

namespace Drupal\demo\Commands;

use Drush\Commands\DrushCommands;

/**
 * Custom drush commands.
 */
class CustomCommands extends DrushCommands {

  /**
   * Drush command defined here.
   *
   * @command print:message
   * @aliases print-message
   * @param string $text The message to print.
   * @option bool $uppercase Convert the message to uppercase.
   */
  public function printMe($text = 'Hello world!', array $options = ['uppercase' => FALSE]) {
    if ($options['uppercase']) {
      $text = strtoupper($text);
    }
    $this->output()->writeln($text);
  }

}