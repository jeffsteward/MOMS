---
layout: section
title: Museum News Archive
---
<section>
    <ul class="list-unstyled">
    {% assign articles = site.data.news | sort:"NewsDate" | reverse %}
    {% for article in articles %}
        {% if article.Published %}
        <li class="mb-4 border-bottom border-dark">
            <h2>{{ article.Title }}</h2>
            <p>{{ article.NewsDate | date: '%A, %B %d, %Y' '}}</p>
            <p>{{ article.Content }}</p>
            <p class="text-muted">Filed under: {{ article.Category }}</p>
        </li>
        {% endif %}
    {% endfor %}
    </ul>
</section>