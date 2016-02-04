<?hh

// Hack functions are annotated with types.
function my_negation(bool $x): bool {
  return !$x;
}

// FIXME: annotate this function parameter
// and return with the type 'int'.
function add_one(int $x): int {
  return $x + 1;
}
