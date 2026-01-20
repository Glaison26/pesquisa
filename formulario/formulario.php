<!-- Formulário de levantamento de necessidades de infomática da Prefeitura de Sabará -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Necessidades de Serviços de TI - Prefeitura de Sabará</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Pesquisa de Necessidades de Serviços de TI</h1>
        <h2>Prefeitura de Sabará</h2>
    </header>
    <main>
        <form action="submit_form.php" method="POST">
            <section>
                <h3>1. Identificação da Área Solicitante</h3>

                <label for="orgao">Órgão / Unidade Administrativa:</label>
               <!-- combo box com opções pré-definidas -->
                <select id="orgao" name="orgao" required>
                    <option value="">Selecione o órgão</option>
                    <option value="secretaria de planejamento">Secretaria de Planejamento</option>
                    <option value="secretaria de educacao">Secretaria de Educação</option>
                    <option value="secretaria de saude">Secretaria de Saúde</option>
                    <option value="secretaria de obras">Secretaria de Obras</option>
                    <option value="secretaria de meio ambiente">Secretaria de Meio Ambiente</option>
                    <option value="secretaria de administracao">Secretaria de Administração</option>
                    <option value="secretaria de cultura">Secretaria de Cultura</option>
                    <option value="secretaria de esporte">Secretaria de Esportes</option>
                    <option value="secretaria de turismo">Secretaria de Turismo</option>
                    <option value="secretaria de fazenda">Secretaria de Fazenda</option>
                    <option value="secretaria de desenvolvimento">Secretaria de Desenvolvimento Social</option>
                    <option value="secretaria de seguranpublica">Secretaria de Segurança Pública</option>
                    <option value="secretaria de defesa civil">Secretaria de Defesa Civil</option>
                    <option value="Procuradoria">Procuradoria Jurídica</option>
                    <option value="controladoria">Controladoria Geral</option>
                    <option value="outro">Outro</option>
                </select>

                <label for="departamento">Departamento / Setor:</label>
                <input type="text" id="departamento" name="departamento" required>

                <label for="responsavel">Responsável pela Solicitação:</label>
                <input type="text" id="responsavel" name="responsavel" required>

                <label for="cargo">Cargo / Função:</label>
                <input type="text" id="cargo" name="cargo" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefone">Telefone / Ramal:</label>
                <input type="tel" id="telefone" name="telefone" required>

                <label for="data_solicitacao">Data da Solicitação:</label>
                <input type="date" id="data_solicitacao" name="data_solicitacao" required>
            </section>

            <section>
                <h3>2. Tipo de Necessidade</h3>
                <!-- múltipla escolha com checkboxes com check na mesma linha do input -->
                <div class="container-flex">
                    <input type="checkbox" id="desenvolvimento_sistema" name="desenvolvimento_sistema" value="SIM">
                    <label for="desenvolvimento_sistema">Desenvolvimento de sistema</label><br>
                </div>
                <div class="container-flex">
                    <input type="checkbox" id="aquisicao_software" name="aquisicao_software" value="SIM">
                    <label for="aquisicao_software">Aquisição de software</label><br>
                </div>
                <div class="container-flex">
                    <input type="checkbox" id="aquisicao_hardware" name="aquisicao_hardware" value="SIM">
                    <label for="aquisicao_hardware">Aquisição de hardware / equipamentos</label><br>
                </div>
                <div class="container-flex">
                    <input type="checkbox" id="infraestrutura_rede" name="infraestrutura_rede" value="SIM">
                    <label for="infraestrutura_rede">Infraestrutura de rede</label><br>
                </div>
                <div class="container-flex">
                    <input type="checkbox" id="seguranca_informacao" name="seguranca_informacao" value="SIM">
                    <label for="seguranca_informacao">Segurança da informação</label><br>
                </div>
                <div class="container-flex">
                    <input type="checkbox" id="suporte_tecnico" name="suporte_tecnico" value="SIM">
                    <label for="suporte_tecnico">Suporte técnico / manutenção</label><br>
                </div>
                <div class="container-flex">
                    <input type="checkbox" id="integracao_sistemas" name="integracao_sistemas" value="SIM">
                    <label for="integracao_sistemas">Integração entre sistemas</label><br>
                </div>
                <div class="container-flex">
                    <input type="checkbox" id="capacitacao_treinamento" name="capacitacao_treinamento" value="SIM">
                    <label for="capacitacao_treinamento">Capacitação / treinamento</label><br>
                </div>
                <div class="container-flex">
                    <input type="checkbox" id="outro_tipo_necessidade" name="outro_tipo_necessidade" value="SIM">
                    <label for="outro_tipo_necessidade">Outro:</label>
                </div>
                <input type="text" id="especificar_outro" name="especificar_outro">

            </section>
            <!-- descrição detalhada da necessidade texto livre -->
            <section>
                <h3>3. Descrição Detalhada da Necessidade</h3>
                <textarea id="descricao_necessidade" name="descricao_necessidade" rows="5" required></textarea>
            </section>
            <!-- Justificativa texto livre -->
            <section>
                <h3>4. Justificativa</h3>
                <textarea id="justificativa" name="justificativa" rows="5" required></textarea>
            </section>
            <!-- Objetivos Esperados texto livre -->
            <section>
                <h3>5. Objetivos Esperados</h3>
                <textarea id="objetivos_esperados" name="objetivos_esperados" rows="5" required></textarea>
            </section>
            <!-- Usuários Impactados -->
            <section>
                <h3>6. Usuários Impactados</h3>
                <label for="quantidade_usuarios">Quantidade estimada de usuários:</label>
                <input type="number" id="quantidade_usuarios" name="quantidade_usuarios" required>

                <label for="perfis_usuarios">Perfis dos usuários (ex.: administrativos, técnicos, gestores, cidadãos, etc.):</label>
                <textarea id="perfis_usuarios" name="perfis_usuarios" rows="3" required></textarea>
            </section>
            <!-- Prioridade da Demanda -->
            <section>
                <h3>7. Prioridade da Demanda</h3>
                <div class="container-flex">
                    <input type="radio" id="prioridade_alta" name="prioridade_demanda" value="alta" required>
                    <label for="prioridade_alta">Alta – essencial para o funcionamento do órgão</label><br>
                </div>
                <div class="container-flex">
                    <input type="radio" id="prioridade_media" name="prioridade_demanda" value="media">
                    <label for="prioridade_media">Média – importante, mas não crítica</label><br>
                </div>
                <div class="container-flex">
                    <input type="radio" id="prioridade_baixa" name="prioridade_demanda" value="baixa">
                    <label for="prioridade_baixa">Baixa – pode ser atendida posteriormente</label><br>
                </div>

                <label for="justificativa_prioridade">Justificativa da prioridade (se necessário):</label>
                <textarea id="justificativa_prioridade" name="justificativa_prioridade" rows="3"></textarea>
            </section>
            <!-- Prazo Desejado -->
            <section>
                <h3>8. Prazo Desejado</h3>
                <label for="data_ideal_atendimento">Data ideal para atendimento:</label>
                <input type="date" id="data_ideal_atendimento" name="data_ideal_atendimento" required>

                <label>Existe prazo legal ou normativo?</label><br>
                <div class="container-flex">
                    <input type="radio" id="prazo_sim" name="prazo_legal" value="sim" required>
                    <label for="prazo_sim">Sim</label><br>
                </div>
                <div class="container-flex">
                    <input type="radio" id="prazo_nao" name="prazo_legal" value="nao">
                    <label for="prazo_nao">Não</label><br>
                </div>
                
                <label for="especificacao_prazo">Se sim, especifique:</label>
                <textarea id="especificacao_prazo" name="especificacao_prazo" rows="3"></textarea>
            </section>


            <!-- Additional sections would go here -->

            <button type="submit">Enviar Solicitação</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2026 Prefeitura de Sabará. Todos os direitos reservados.</p>
    </footer>
</body>

</html>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header,
    footer {
        background-color: #004080;
        color: white;
        text-align: center;
        padding: 1em 0;
    }

    main {
        padding: 20px;
        max-width: 800px;
        margin: auto;
        background-color: white;
    }

    h1,
    h2,
    h3 {
        margin-bottom: 10px;
    }

    form label {
        display: block;
        margin-top: 10px;
    }

    form input[type="text"],
    form input[type="email"],
    form input[type="tel"],
    form input[type="date"],
    form input[type="number"],
    form textarea {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        box-sizing: border-box;
    }

    form button {
        margin-top: 20px;
        padding: 10px 15px;
        background-color: #004080;
        color: white;
        border: none;
        cursor: pointer;
    }

    form button:hover {
        background-color: #003366;
    }

    .container-flex {
        display: flex;
        align-items: center;
    }
    .container-flex label {
        margin-left: 5px;
    }
    select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        box-sizing: border-box;
    }


</style>