<?php

$content = <<< 'HAH'
<p>Grządki widać, że on.</p>
<code teaser = 'html'><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code>
<p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title ='Gęślą jaźń'>Sobie wstaną</a> od.</p>
<code data-abc ='hello world123' teaser = 'javascript' style= "color: #abc123; line-height:160%;">xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("demo").innerHTML = xhttp.responseText;
  }
};
xhttp.open("GET", "ajax_info.txt", true);
xhttp.send();</code>
<p>Rejenta, <strong>szczuplejszy i ustawić co.</strong></p>
<p>Ogiński z opieki nie... (...)</p>
<p>Rumienił się.</p>
HAH;


// dataProvider item START #0
$length = 0;
$expected = <<< 'HAH'
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #0

// dataProvider item START #1
$length = 22;
$expected = <<< 'HAH'
<p>Grządki widać, że on...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #1

// dataProvider item START #2
$length = 23;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #2




// dataProvider item START #3
$length = 54;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #3



// dataProvider item START #4
$length = 55;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #4



// dataProvider item START #5
$length = 56;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #5



// dataProvider item START #6
$length = 57;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #6



// dataProvider item START #7
$length = 58;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #7



// dataProvider item START #8
$length = 59;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #8



// dataProvider item START #9
$length = 60;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #9



// dataProvider item START #10
$length = 61;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #10



// dataProvider item START #11
$length = 62;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #11



// dataProvider item START #12
$length = 94;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #12




// dataProvider item START #13
$length = 95;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #13



// dataProvider item START #14
$length = 96;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #14




// dataProvider item START #15
$length = 100;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #15



// dataProvider item START #16
$length = 107;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie...</a></p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #16

// dataProvider item START #17
$length = 108;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną...</a></p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #17


// dataProvider item START #18
$length = 110;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną...</a></p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #18



// dataProvider item START #19
$length = 126;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #19



// dataProvider item START #20
$length = 144;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #20


// dataProvider item START #21
$length = 151;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange = function...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #21


// dataProvider item START #22
$length = 155;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange = function...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #22

// dataProvider item START #23
$length = 181;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #23



// dataProvider item START #24
$length = 182;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #24



// dataProvider item START #25
$length = 280;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("demo").innerHTML = xhttp.responseText...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #25


// dataProvider item START #26
$length = 281;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("demo").innerHTML = xhttp.responseText...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #26


// dataProvider item START #27
$length = 282;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("demo").innerHTML = xhttp.responseText...</code>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #27


// dataProvider item START #28
$length = 363;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("demo").innerHTML = xhttp.responseText;
  }
};
xhttp.open("GET", "ajax_info.txt", true);
xhttp.send();</code><p>Rejenta, <strong>szczuplejszy i...</strong></p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #28


// dataProvider item START #29
$length = 399;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("demo").innerHTML = xhttp.responseText;
  }
};
xhttp.open("GET", "ajax_info.txt", true);
xhttp.send();</code><p>Rejenta, <strong>szczuplejszy i ustawić co.</strong></p><p>Ogiński z opieki nie...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #29


// dataProvider item START #30
$length = 400;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("demo").innerHTML = xhttp.responseText;
  }
};
xhttp.open("GET", "ajax_info.txt", true);
xhttp.send();</code><p>Rejenta, <strong>szczuplejszy i ustawić co.</strong></p><p>Ogiński z opieki nie...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #30


// dataProvider item START #31
$length = 401;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("demo").innerHTML = xhttp.responseText;
  }
};
xhttp.open("GET", "ajax_info.txt", true);
xhttp.send();</code><p>Rejenta, <strong>szczuplejszy i ustawić co.</strong></p><p>Ogiński z opieki nie...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #31





// dataProvider item START #32
$length = 500;
$expected = <<< 'HAH'
<p>Grządki widać, że on.</p><code teaser="html"><p>Einstein wrote: <var>E</var> = <var>m</var><var>c</var><sup>2</sup>.</p></code><p><a href="html://www.google.pl/jeden/dwa/?par1=abc&par2=100" title="Gęślą jaźń">Sobie wstaną</a> od.</p><code data-abc="hello world123" teaser="javascript" style="color: #abc123; line-height:160%;">xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("demo").innerHTML = xhttp.responseText;
  }
};
xhttp.open("GET", "ajax_info.txt", true);
xhttp.send();</code><p>Rejenta, <strong>szczuplejszy i ustawić co.</strong></p><p>Ogiński z opieki nie... (...)</p><p>Rumienił się...</p>
HAH;

array_push($data, [$length, $content, $expected]);
// dataProvider item end #32