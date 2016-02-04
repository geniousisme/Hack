<?hh

// Tuples represent fixed size arrays.
// TODO: fix the return type.
function my_first_pair((int, bool) $pair): bool {
  list($_, $result) = $pair;
  return $result;
}
