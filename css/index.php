<div class="modal fade" id="esquecisenha" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Esqueceu a senha ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form  action="/login/troca_senha" method="POST">
                    <div class="mb-3">
                        <label for="Username" class="form-label">Usuário:</label>
                        <input type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary">Nova senha</button>
                </form>
            </div>
        </div>
    </div>
</div>