<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" aria-current="page" href="{{ route('dashboard.index') }}">
            <svg class="bi">
                <use xlink:href="#house-fill" />
            </svg>
            Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="{{ route('venda.index') }}">
            <svg class="bi">
                <use xlink:href="#file-earmark" />
            </svg>
            Vendas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="{{ route('produto.index') }}">
            <svg class="bi">
                <use xlink:href="#cart" />
            </svg>
            Produtos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="{{ route('cliente.index') }}">
            <svg class="bi">
                <use xlink:href="#people" />
            </svg>
            Clientes
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="{{ route('usuario.index') }}">
            <svg class="bi">
                <use xlink:href="#people" />
            </svg>
            Usuários
        </a>
    </li>
</ul>

<hr class="my-3">

<ul class="nav flex-column mb-auto">
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi">
                <use xlink:href="#gear-wide-connected" />
            </svg>
            Configurações
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="{{ route('logout') }}">
            <svg class="bi">
                <use xlink:href="#door-closed" />
            </svg>
            Sair
        </a>
    </li>
</ul>
