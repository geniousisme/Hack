<?hh

// Shapes can be used for arrays with constant string keys.
type my_shape = shape(
  'field1' => int,
  'field2' => bool,
);

function first_shape(): my_shape {
  $result = shape('field1' => 1, 'field2' => true);
  // TODO: set 'field2' to the value true
  // on $result to complete the shape.
  return $result;
}
