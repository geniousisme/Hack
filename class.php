<?hh

// All the members of a class must be initialized

class Point {

  private float $x;
  private float $y;

  public function __construct(float $x, float $y) {
    $this->x = $x;
    $this->y = $y;
    // FIXME: initalize the member 'y'
  }
}
