<?hh

function vector_add1(Vector<int> $v): Vector<int> {
  // Example of lambda expressions.
  return $v->map($x ==> $x + 1);
}

function vector_mult2(Vector<int> $v): Vector<int> {
  // TODO: write a function multiplying all the elements by 2
  return $v->map($v ==> $v * 2);
}
