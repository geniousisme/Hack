<?hh

class C { protected function bar(): void {} }
interface I { public function foo(): void; }
// 'require' lets you specify what the trait needs to work properly.
trait T {

  // The class using the trait must extend 'C'
  require extends C;

  // TODO: uncomment the next line to fix the error
  require implements I;

  public function do_stuff(): void {
    $this->bar(); // We can access bar because we used "require extends"
    $this->foo();
  }
}
