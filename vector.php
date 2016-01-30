<?hh

// Hack introduces new collection types (Vector, Set and Map).
function test(): int {

  // Vector is preferred over array(1, 2, 3)
  $vector = Vector {1, 2, 3};

  $sum = 0;
  foreach ($vector as $val) {
    $sum += $val;
  }

  return $sum;
}
