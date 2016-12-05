<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{!! route('clients.index') !!}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>

<li class="{{ Request::is('projets*') ? 'active' : '' }}">
    <a href="{!! route('projets.index') !!}"><i class="fa fa-edit"></i><span>Projets</span></a>
</li>
<li class="{{ Request::is('articles*') ? 'active' : '' }}">
    <a href="{!! route('articles.index') !!}"><i class="fa fa-edit"></i><span>articles</span></a>
</li>

<li class="{{ Request::is('attributArticles*') ? 'active' : '' }}">
    <a href="{!! route('attributArticles.index') !!}"><i class="fa fa-edit"></i><span>attribut_articles</span></a>
</li>
<li class="{{ Request::is('categorieArticles*') ? 'active' : '' }}">
    <a href="{!! route('categorieArticles.index') !!}"><i class="fa fa-edit"></i><span>categorie_articles</span></a>
</li>
<li class="{{ Request::is('articleHasAttributArticles*') ? 'active' : '' }}">
    <a href="{!! route('articleHasAttributArticles.index') !!}"><i class="fa fa-edit"></i><span>article_has_attribut_articles</span></a>
</li>

<li class="{{ Request::is('entropots*') ? 'active' : '' }}">
    <a href="{!! route('entropots.index') !!}"><i class="fa fa-edit"></i><span>entropots</span></a>
</li>



<li class="{{ Request::is('articleHasEntropots*') ? 'active' : '' }}">
    <a href="{!! route('articleHasEntropots.index') !!}"><i class="fa fa-edit"></i><span>article_has_entropots</span></a>
</li>

<li class="{{ Request::is('entreprises*') ? 'active' : '' }}">
    <a href="{!! route('entreprises.index') !!}"><i class="fa fa-edit"></i><span>entreprises</span></a>
</li>

<li class="{{ Request::is('sites*') ? 'active' : '' }}">
    <a href="{!! route('sites.index') !!}"><i class="fa fa-edit"></i><span>sites</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>users</span></a>
</li>

<li class="{{ Request::is('visitePreventives*') ? 'active' : '' }}">
    <a href="{!! route('visitePreventives.index') !!}"><i class="fa fa-edit"></i><span>visite_preventives</span></a>
</li>

<li class="{{ Request::is('usersHasVisitePreventives*') ? 'active' : '' }}">
    <a href="{!! route('usersHasVisitePreventives.index') !!}"><i class="fa fa-edit"></i><span>users_has_visite_preventives</span></a>
</li>



