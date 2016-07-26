<?php

$content = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p>  

  <p>Wdział więc, jak                  
   od lasu.</p>
                  <code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code>
<p>A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.</p>

<p>Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura! - Tadeuszowi.</p>

<p>Pytano zdania bo tak mędrsi fircykom oprzeć się jak krzykną: ura! - Tadeuszowi wrzasnął tuż.</p>
HAH;


// dataProvider item START #0
$length = 22;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #0

// dataProvider item START #1
$length = 48;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #1

// dataProvider item START #2
$length = 49;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #2

// dataProvider item START #3
$length = 50;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu...</p>
HAH;
array_push($data, [$length, $content, $expected]);
// dataProvider item end #3

// dataProvider item START #4
$length = 54;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #4

// dataProvider item START #5
$length = 55;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #5

// dataProvider item START #6
$length = 57;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #6

// dataProvider item START #7
$length = 59;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #7
// dataProvider item START #8
$length = 60; //dodana 1
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #8

// dataProvider item START #9
$length = 87;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #9

// dataProvider item START #10
$length = 89;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #10

// dataProvider item START #11
$length = 89;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #11

// dataProvider item START #12
$length = 750;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #12


// dataProvider item START #13
$length = 751;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A...</p>
HAH;

// dataProvider item START #14
$length = 757;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #14


// dataProvider item START #15
$length = 1136;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.</p><p>Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura! - Tadeuszowi.</p><p>Pytano zdania bo tak mędrsi fircykom oprzeć się jak krzykną: ura! - Tadeuszowi wrzasnął...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #15


// dataProvider item START #16
$length = 1044;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.</p><p>Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #16


// dataProvider item START #17
$length = 1045;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.</p><p>Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura! - Tadeuszowi...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #17


// dataProvider item START #17
$length = 1046;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.</p><p>Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura! - Tadeuszowi...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #17


// dataProvider item START #18
$length = 1047;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.</p><p>Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura! - Tadeuszowi...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #18


// dataProvider item START #19
$length = 1048;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.</p><p>Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura! - Tadeuszowi...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #19


// dataProvider item START #20
$length = 1052;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.</p><p>Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura! - Tadeuszowi.</p><p>Pytano...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #20


// dataProvider item START #21
$length = 1136;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.</p><p>Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura! - Tadeuszowi.</p><p>Pytano zdania bo tak mędrsi fircykom oprzeć się jak krzykną: ura! - Tadeuszowi wrzasnął...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #21


// dataProvider item START #22
$length = 1137;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.</p><p>Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura! - Tadeuszowi.</p><p>Pytano zdania bo tak mędrsi fircykom oprzeć się jak krzykną: ura! - Tadeuszowi wrzasnął tuż...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #22


// dataProvider item START #23
$length = 1138;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.</p><p>Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura! - Tadeuszowi.</p><p>Pytano zdania bo tak mędrsi fircykom oprzeć się jak krzykną: ura! - Tadeuszowi wrzasnął tuż...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #23


// dataProvider item START #24
$length = 1500;
$expected = <<< 'HAH'
<p>Woźnemu, że nasi synowie.</p><p>Wdział więc, jak od lasu.</p><code teaser="php"><?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack; //   Zażółć gęślą jaźń. Zażółć gęślą jaźń. Zażółć. 
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?></code><p>A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.</p><p>Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura! - Tadeuszowi.</p><p>Pytano zdania bo tak mędrsi fircykom oprzeć się jak krzykną: ura! - Tadeuszowi wrzasnął tuż...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #24


/*
 *
A Lachowicz i w nią śrut cienki! Trzymano wprawdzie chartów, bo tak na wieś i rozmyślał: Ogiński z tabakiery waży w ulicę się raczéj jako jenerał Dąbrowski z dom i niesrogi. Odgadnęła sąsiadka.Rosyi straszną jak po francusku. Biegali wszyscy i cofnął się, serce mu jak krzykną: ura! - Tadeuszowi.Pytano zdania bo tak mędrsi fircykom oprzeć się jak krzykną: ura! - Tadeuszowi wrzasnął tuż.
388
750

1050
  88

1138


Pytano zdania bo tak mędrsi fircykom oprzeć się jak krzykną: ura! - Tadeuszowi wrzasnął tuż.
92

1138 - 92
1046

*/