<?php

$content = <<< 'HAH'
<p><a href= 'http://google/abc/?hej=ho&ile=21'>Ogłosił <strong>nam</strong></a>, że go.</p>
<p>Brał dom żałobę, ale widzę.</p>
<p>Rejtan, gdyby ożył? Wróciłby do.</p>
HAH;


// dataProvider item START #0
$length = 6;
$expected = <<< 'HAH'
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #0


// dataProvider item START #1
$length = 7;
$expected = <<< 'HAH'
<p><a href="http://google/abc/?hej=ho&ile=21">Ogłosił...</a></p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #1

// dataProvider item START #2
$length = 10;
$expected = <<< 'HAH'
<p><a href="http://google/abc/?hej=ho&ile=21">Ogłosił...</a></p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #2

// dataProvider item START #3
$length = 67;
$expected = <<< 'HAH'
<p><a href="http://google/abc/?hej=ho&ile=21">Ogłosił <strong>nam</strong></a>, że go.</p><p>Brał dom żałobę, ale widzę.</p><p>Rejtan, gdyby ożył...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #3


// dataProvider item START #4
$length = 78;
$expected = <<< 'HAH'
<p><a href="http://google/abc/?hej=ho&ile=21">Ogłosił <strong>nam</strong></a>, że go.</p><p>Brał dom żałobę, ale widzę.</p><p>Rejtan, gdyby ożył? Wróciłby do...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #4