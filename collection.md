---
layout: section
title: The Collection
---
<section>
    <ul class="list-unstyled">
    {% assign globes = site.data.snowglobes | sort:"Name" %}
    {% for snowglobe in globes %}
        <li class="mb-4 border-bottom border-dark">
            <h2>{{ snowglobe.Name }}</h2>
            
            <img src="/assets/images/snowglobes/200x200/{{ snowglobe.FileName }}" class="pb-2">
            
            {% if snowglobe.Description != null %}<p class="lead"><strong>Description</strong><br/>{{ snowglobe.Description }}</p>{% endif %}
            {% if snowglobe.Notes != null %}<p class="lead"><strong>Notes</strong><br/>{{ snowglobe.Notes }}</p>{% endif %}
            {% if snowglobe.LabelText != null %}<p class="lead"><strong>Commentary</strong><br/>{{ snowglobe.LabelText }}</p>{% endif %}

            <div class="pb-4 text-muted">
                Date: {{ snowglobe.DateAcquired }} {{ snowglobe.Year }}<br/>
                Purchase Location: {{ snowglobe.FullLocation }}<br/>
                Cost: {{ snowglobe.Cost }}<br/>
                Donor: {{ snowglobe.DonorName }}<br/>
                Dimensions: {% if snowglobe.BaseWidth != null %} {{ snowglobe.BaseWidth }}"W x {{ snowglobe.BaseDepth }}"D x {{ snowglobe.Height}}"H {% endif %}<br/>
                Condition: {{ snowglobe.Condition }}
            </div>
        </li>
    {% endfor %}
    </ul>
</section>