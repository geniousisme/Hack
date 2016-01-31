<?hh

// You can specify the types of functions too.
function apply_int<T>((function(int): T) $callback, int $value): T {
  // TODO: return $callback($value)
  return $callback($value);
}
