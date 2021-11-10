<div class="lateral-1">
                <h1 class="h1-topic">Seja um Franqueado!</h1>
                <h4 class="h4-sub-title">Participe da melhor oferta de investimento da atualidade!</h4>
                <p class="text-description-equivale">
                    Estamos em constante crescimento, nos adaptando cada vez mais ao mercado em nível de qualidade e tecnologia.
                    Por ser um mercado de consumo recorrente com alto índice de procura, se torna um investimento duradouro e de crescimento notável
                </p>
                <img src="static/img/grafico.jpg" alt="grafico" class="img1">
                <h3 class="sub-title"> Um negócio sólido com alto índice de evolução e crescimento! </h3>
                <p class="text-description-equivale">Estamos desde 2005 no mercado de EPIs entregando qualidade, agilidade, nos destacando no mercado e fidelizando nossos clientes.</p>
                <img src="static/img/ilustracao1.png" alt="" class="img2">
                <h3 class="sub-title"> Seja um de nosso Franqueados!</h3>
                <p class="text-description-equivale"> Aqui na EQUIVALE você contará com uma equipe especializada e treinada para oferecer a melhor qualidade, agilidade e suporte com o foco em alcançar metas e objetivos.
                    Com uma estrutura preparada para oferecer o suporte necessário para você gerenciar sua unidade com recursos operacionais e técnicos! </p>
                <h1 class="end-title"> Sem crise!</h1>
                <p class="end-text-equivale">Seja parte da nossa equipe! Com investimentos a partir de R$ 150.000,00
                </p>
                <h4 class="span">(Incluindo taxa de franquia e estoque)</h4>
            </div>
            <div class="lateral-2">
                <!--Web Modelo Form-->
                <div class="formulario-web">
                    <span>Preencha o formulário abaixo para que possamos entrar em contato!</span>
                    <div class="form-control">
                        <form action="adicionando_nova_franquia.php" method="POST" class="formulario-dentro">
                            <p>Formulario de Contato</p>
                            <label for="">Nome: </label>
                            <input type="text" name="nome" placeholder="Nome completo" required >
                            <label for="">Telefone: </label>
                            <input type="text" id="telefone"  name="telefone" placeholder="Número de telefone" required >
                            <label for="">Whatsapp: </label>
                            <input type="text" id ="celular" name="whatsapp" placeholder="Whatsapp" required >
                            <label for="">Email: </label>
                            <input type="email" name="email" placeholder="Email" required>
                            <label for="">Local de interesse: </label>
                            <input type="text" name="cidade_interesse" placeholder="Cidade de Interrese" required>
                            <input type="submit" value="Enviar" class="enviar-btn">
                        </form>
                    </div>
                </div>
                <!--Celular Modelo Form-->
                <h2 class="aviso-botao">Clique no botão abaixo para preencher o formulario e receber o contato de nosso consultor de franquia
                    <button onclick="abrir()" class="btn-form"> Abrir Formulário </button>
                    <div class="formulario" id="formulario">
                        <form action="" class="formulario-dentro">
                            <span class="material-icons-outlined" onclick="fechar_formulario()">X</span>
                            <p>Formulario de Contato</p>
                            <label for="">Nome: </label>
                            <input type="">
                            <label for="">Telefone: </label>
                            <input type="">
                            <label for="">Whatsapp: </label>
                            <input type="">
                            <label for="">Email: </label>
                            <input type="">
                            <button type="submit" onclick="fechar()" class="enviar-btn"> Enviar </button>
                        </form>
                    </div>
            </div>
        </div>
    </main>
    <script src="static/js/jquery-3.6.0.min.js"></script>
    <script src="static/js/jquery.mask.min.js"></script>
    <script src="static/js/js.js">
    </script>
    <script type="text/javascript">
        document.getElementById('telefone').addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
            e.target.value = '(' +x[1] + ') '+ x[2] + '' + x[3]
        });
        document.getElementById('celular').addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
            e.target.value = '(' +x[1] + ') '+ x[2] + '-' + x[3]
        });
    </script>
</body>