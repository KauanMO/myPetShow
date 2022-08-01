<!--Modal-->
<div class="modal fade" id="ModalLogin" tabindex="-1" aria-labelledby="ModalLogin" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="./login.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="emailLogin" placeholder="exemplo@gmail.com">
                        <label for="emailLogin">Email</label>
                    </div>
                    <div class="form-floating">
                    <input type="password" class="form-control" id="senhaLogin" placeholder="Senha">
                        <label for="senhaLogin">Senha</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <br>
                    </form>
                    <div class="subTexto" id="subTexto"><p>Não possui uma conta? faça o <a href="#" data-bs-toggle="modal" data-bs-target="#ModalRegister">cadastro aqui</a></p></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>                    
                </div>
            </div>
</div>

<div class="modal fade" id="ModalRegister" tabindex="-1" aria-labelledby="ModalRegister" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Cadastro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <form action="./cadastrar.php" method="post">
                <div>
                <input type="hidden" placeholder="idCadastro" name="idCadastro"/>
                </div>
                <div class="form-floating mb-3">
                    <input type="user" class="form-control" id="userCadastro" placeholder="Usuário">
                    <label for="floatingInput">Usuário</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="emailCadastro" placeholder="exemplo@gmail.com">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                <input type="password" class="form-control" id="senhaCadastro" placeholder="Senha">
                    <label for="senhaCadastro">Senha</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" id="confirmSenhaCadastro" placeholder="Confirme a senha">
                    <label for="confirmSenhaCadastro">Confirme a senha</label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <div class="subTexto" id="subTexto"><p>Já tem uma conta? <a href="#" data-bs-toggle="modal" data-bs-target="#ModalLogin">Faça login aqui</a></p></div>
            </div>
        </div>
        
    </div>
</div>