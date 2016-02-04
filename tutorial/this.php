<?hh

// The type 'this' always points to the most derived type
class MyBaseClass {
  protected int $count = 0;

  // TODO: replace 'MyBaseClass' by 'this'
  public function add1(): this {
    $this->count += 1;
    return $this;
  }
}

class MyDerivedClass extends MyBaseClass {
  public function print_count(): void { echo $this->count; }
}

function test(): void {
  $x = new MyDerivedClass();
  $x->add1()->print_count();
}
