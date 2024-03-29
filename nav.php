    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar ">
            <a href="gerenciador.php" class="navbar-brand mx-4 mb-3 logoEsquerdaNav">
                <img src="http://cbvd.org.br/gerenciador/img/Login/icone.png" alt="icone CBVD">
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="http://cbvd.org.br/gerenciador/img/Login/icone.png" alt="icone CBVD" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0"><?php echo isset($dadoLogin) ? $dadoLogin->SIGLA_CLUBE: null  ?></h6>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="gerenciador.php" class="nav-item nav-link active"><i class="bi bi-house me-2"></i>Início</a>
                <div class="nav-item dropdown">
                    <a href="equipe.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-people-fill"></i> Equipe</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="editarEquipe.php" class="dropdown-item"><i class="bi bi-pencil-square"></i> Editar Equipe</a>
                        <a href="relatorioEquipe.php" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Equipe</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="pessoa.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person-badge me-2"></i>Pessoas</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="adicionarPessoa.php" class="dropdown-item"><i class="bi bi-person-add"></i> Adicionar Pessoa</a>
                        <a href="editarPessoa.php" class="dropdown-item"><i class="bi bi-person-dash"></i> Editar Pessoa</a>
                        <a href="transferirPessoa.php" class="dropdown-item"><i class="bi bi-repeat"></i> Transferir Pessoa</a>
                        <a href="confirmarTransferencia.php" class="dropdown-item"><i class="bi bi-save-fill"></i> Confirmar Transferência</a>
                        <a href="relatorioPessoa.php" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Pessoa</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="evento.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-calendar3"></i> Eventos</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="criarEvento.php" class="dropdown-item"><i class="bi bi-calendar-plus"></i> Criar Evento</a>
                        <a href="inscricaoEvento.php" class="dropdown-item"><i class="bi bi-pen"></i> Inscrever no Evento</a>
                        <a href="acompanharEvento.php" class="dropdown-item"><i class="bi bi-bell"></i> Acompanhar Evento</a>
                        <a href="relatorioEvento.php" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Eventos</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand sticky-top px-4 py-0 topNav">
            <a href="gerenciador.php" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="bi bi-justify"></i>
            </a>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="pessoa.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="bi bi-person-badge"></i>
                        <span class="d-none d-lg-inline-flex">Pessoas</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                        <a href="adicionarPessoa.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0"><i class="bi bi-person-add"></i> Adicionar Pessoa</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="editarPessoa.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0"><i class="bi bi-person-dash"></i> Editar Pessoa</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="transferirPessoa.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0"><i class="bi bi-repeat"></i> Transferir Pessoa</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="confirmarTransferencia.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0"><i class="bi bi-save-fill"></i> Confirmar Transferência</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="relatorioPessoa.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0"><i class="bi bi-file-earmark-medical"></i> Relatório de Pessoa</h6>
                        </a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="evento.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="bi bi-calendar3"></i>
                        <span class="d-none d-lg-inline-flex">Eventos</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                        <a href="criarEvento.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0"><i class="bi bi-calendar-plus"></i> Criar Evento</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="inscricaoEvento.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0"><i class="bi bi-pen"></i> Inscrever no Evento</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="acompanharEvento.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0"><i class="bi bi-bell"></i> Acompanhar Evento</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="relatorioEvento.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0"><i class="bi bi-file-earmark-medical"></i> Relatório de Eventos</h6>
                        </a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="equipe.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="http://cbvd.org.br/gerenciador/img/Login/icone.png" alt="icone CBVD" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex"><?php echo isset($dadoLogin) ? $dadoLogin->SIGLA_CLUBE : null  ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                        <a href="editarEquipe.php" class="dropdown-item"><i class="bi bi-pencil-square"></i> Editar Equipe</a>
                        <a href="relatorioEquipe.php" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Equipe</a>
                        <a href="logof-back.php" class="dropdown-item">Sair</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->