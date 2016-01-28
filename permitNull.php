<?hh

// Prefixing a type with '?' permits null.

// TODO: fix the type of the parameter $x to permit null.
function f(?int $x): void {
  var_dump($x);
}

function test(): void {
  f(123);
  f(null);
}
