<?hh
function f($x = [1]) {
  return $x;
}
class C {
  public static $y = [2, 3];
}
<<__EntryPoint>> function main(): void {
var_dump([]);
var_dump(f());
var_dump(C::$y);
}
