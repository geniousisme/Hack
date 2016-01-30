<?hh

// Hack uses generics for Collection types.

// TODO: fix the return type of the function 'test'
function test(): Vector<int> {
  $vector = Vector {1, 2, 3};
  return $vector;
}
