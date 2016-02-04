<?hh

class MyBaseClass {
  // TODO: fix the typo in the name of the method.
  public function get_user(): MyUser {
    return new MyUser();
  }
}

class MyDerivedClass extends MyBaseClass {
  /* <<Override>> is used to specify that get_user has been inherited.
   * When that's not the case, Hack gives an error.
   */
  <<Override>> public function get_user(): MyUser {
    return new MyUser();
  }
}
