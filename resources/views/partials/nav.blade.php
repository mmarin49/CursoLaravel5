<p>
    {{link_to_action('PizzaController@create', 'Crear una Pizza',[],[])}} |
    {{link_to_action('PizzaController@index','Mis Pizzas',[],[])}}
    @if(auth()->user()->role_id===1)
        | {{link_to_route('admin.panel','Administración',[])}}
    @endif
</p>