<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <!-- llamamos al logo de Vue -->
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI4F95aSLeb-qS2RGkH6ixvyBQeyq--mYfTF9NBUn4jQ&s"
                        alt="" width="30" height="24">
                </a>
                <a class="navbar-brand" href="#">PCQUOTER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <router-link exact-active-class="active" to="/" class="nav-link active"
                                aria-current="page">Inicio</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link exact-active-class="active" to="/processor"
                                class="nav-link">Procesador</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link exact-active-class="active" to="/contact"
                                class="nav-link">Contacto</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <router-view></router-view>
        </div>
    </main>
</template>
