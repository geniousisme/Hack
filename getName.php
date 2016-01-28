<?hh

interface User { public function getName(): string; }

function get_user_name(?User $user): string {

  if($user !== null) {
    // We checked that $user was not null.
    // Its type is now 'User'.

    /* TODO: return $user->getName() */
    return $user->getName();
  }
  return '<invalid name>';
}

function test(User $user) {
  $name1 = get_user_name($user);
  $name2 = get_user_name(null);
}
