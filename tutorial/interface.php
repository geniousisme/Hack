<?hh

// You can specify constraints on generics.

interface MyInterface {
  public function foo(): void;
}

// TODO: uncomment 'as MyInterface'
// T as MyInterface means any object as long as
// it implements MyInterface
function call_foo<T as MyInterface>(T $x): T {
  $x->foo();
  return $x;
}
