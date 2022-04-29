/*
Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence, which is the number of times you must multiply the digits in num until you reach a single digit.

For example (Input --> Output):
39 --> 3 (because 3*9 = 27, 2*7 = 14, 1*4 = 4 and 4 has only one digit)
999 --> 4 (because 9*9*9 = 729, 7*2*9 = 126, 1*2*6 = 12, and finally 1*2 = 2)
4 --> 0 (because 4 is already a one-digit number)

Sample Tests
class PersistenceTest extends TestCase {
  public function testDescriptionExamples() {
    $this->assertEquals(3, persistence(39));
    $this->assertEquals(4, persistence(999));
    $this->assertEquals(0, persistence(4));
  }
}
*/
<?php
function dd()
{
    array_map(function ($x) {
        var_dump($x);
    }, func_get_args());
    die;
}
function persistence(int $num): int
{
    $count = 0;
    while (count(str_split($num)) > 1) {
        $count++;
        $num = array_product(str_split($num));
    }
    return $count;
}

dd(persistence(39),
   persistence(999),
   persistence(4));
?>
