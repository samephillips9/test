<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1561.61">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 14.0px; font: 12.0px Times; color: #000000; -webkit-text-stroke: #000000; min-height: 14.0px}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 14.0px; font: 12.0px Times; color: #000000; -webkit-text-stroke: #000000}
    span.s1 {font-kerning: none}
    td.td1 {margin: 0.5px 0.5px 0.5px 0.5px; padding: 1.0px 1.0px 1.0px 1.0px}
    td.td2 {width: 674.2px; margin: 0.5px 0.5px 0.5px 0.5px; padding: 1.0px 1.0px 1.0px 1.0px}
  </style>
</head>
<body>
<table cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">&lt;script type="text/javascript"&gt;</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">var isChromium = window.chrome,</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">vendorName = window.navigator.vendor,</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">isOpera = window.navigator.userAgent.indexOf("OPR") &gt; -1,</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">isIEedge = window.navigator.userAgent.indexOf("Edge") &gt; -1;</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">isEdgeChromium = window.navigator.userAgent.indexOf("dg") &gt; -1;</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">// Get the current URL parameters</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">const currentParams = window.location.search;</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">if(isChromium !== null &amp;&amp; isChromium !== undefined &amp;&amp; vendorName === "Google Inc." &amp;&amp; isOpera == false &amp;&amp; isIEedge == false) {</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">// is Google chrome</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">window.location.href = "direction1/index.html" + currentParams;</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">}</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">if(navigator.userAgent.indexOf("Firefox") != -1 )</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">{</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">window.location.href = "direction1/index.html" + currentParams;</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">}</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">if(window.navigator.userAgent.indexOf("dg") != -1 )</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">{</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">window.location.href = "direction1/index.html" + currentParams;</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">}</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">if(window.navigator.userAgent.indexOf("Edge") != -1 )</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">{</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">window.location.href = "direction1/index.html" + currentParams;</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">}</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">if(window.navigator.userAgent.indexOf("Mac") != -1 )</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">{</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">window.location.href = "direction2/index.html" + currentParams;</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">}</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE &gt; 10</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">{</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">window.location.href = "direction1/index.html" + currentParams;</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">}</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p2"><span class="s1">&lt;/script&gt;</span></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td1">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
      <td valign="middle" class="td2">
        <p class="p1"><span class="s1"></span><br></p>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
