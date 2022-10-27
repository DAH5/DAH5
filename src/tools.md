---
title: Tools
layout: 'base.njk'
---

# Tools

_Some web based tools to help with some tedious tasks that can be a pain to do manually._

## Available Tools

{% for tool in collections.tool %}
  **{{ tool.data.title }}** - [Go to Tool]({{ tool.url }})
{% endfor %}