
<h1>Albums</h1>
{{ partial("layouts/menu") }}
{% for album in albums %}
{{ album.genres.name }}
{% endfor %}
