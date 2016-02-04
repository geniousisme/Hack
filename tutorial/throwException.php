<?hh

interface User { public function getName(): string; }

// There are many ways to handle null values.
// Throwing an exception is one of them.

function get_user_name(?User $user): string {

  if($user === null) {
    throw new RuntimeException('Invalid user name');
  }
  /* TODO: return $user->getName() */
  return $user->getName();
}

function test(User $user) {
  $name1 = get_user_name($user);
  $name2 = get_user_name(null);
}
