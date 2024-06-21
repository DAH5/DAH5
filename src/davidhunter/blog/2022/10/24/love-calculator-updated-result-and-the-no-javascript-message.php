---
article_title: Love Calculator: Updated Result and the No JavaScript message
article_description: A small but still important update.
article_author: David Hunter
article_date: 2022-10-24
article_time: 01:14
layout: src/davidhunter/_inc/base.php
current_page: blog
---

<h2>The result is now rounded to the nearest whole number.</h2>

<p>Some results came out with a decimal place precision, and although sometimes it looked okay, there were some results that came out with a rediculous precision, so I had to do something.</p>

<p>I started off by fixing the result to two decimal places, but that made the whole numbers also have the two decimal place precision, and that made it feel less like a game.</p>

<p>To make it feel more like a game again, I made the decision to round all results to the nearest whole number.</p>

<p>Basically, this means you will always see results like 23% instead of 22.33%.</p>


<h2>Fixed the No JavaScript message not appearing in some cases, and improved its visibility</h2>

<p>Before this update, I was using the HTML tag called "noscript", which is an old tag not added to some mobile browsers, specifically Brave on iOS is where I saw it, but it may also have affected others.</p>

<p>To fix this, I needed a more modern approach that I knew would have a much higher chance of being supported in all browsers in use today.</p>

<p>I changed the noscript tag to a div tag and applied some styles to it to make it more visible. Then JavaScript is used to make that div disappear, meaning the message will still show for those with JavaScript disabled, but will hide for those with it enabled.</p>

<p>After making the update live, I went to Brave on iOS to verify it worked as expected, and it did.</p>


<h2>Conclusion</h2>

<p>This was a relatively small update, but still important. Let me know your feedback.</p>
