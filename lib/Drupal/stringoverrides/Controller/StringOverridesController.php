<?php
namespace Drupal\book\Controller;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\book\BookManagerInterface;
class BookController implements ContainerInjectionInterface {
  protected $bookManager;
  /**
   * This method lets us inject the services this class needs.
   *
   * Only inject services that are actually needed. Which services
   * are needed will vary by the controller.
   */
  public static function create(ContainerInterface $container) {
    return new static($container->get('book.manager'));
  }
  public function __construct(BookManagerInterface $bookManager) {
    $this->bookManager = $bookManager;
  }
  /**
   * This is the method that will get called, with the services above already available.
   */
  public function adminOverview() {
    // ...
  }
}
