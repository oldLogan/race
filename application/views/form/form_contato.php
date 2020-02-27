
<form method="POST" action="/principal/sendContato">
    <div class="form-row">
			<div class="col-md-7 mb-3" style="margin: 0px 0px 10px 0px;">
				<input type="text" class="form-control form-control-sm" id="nome" name="nome" placeholder="Insira seu nome" required>
			</div>
		
			<div class="col-md-5 mb-3" style="margin: 0px 0px 10px 0px;">
				<input type="text" class="form-control masc telefone" id="telefone" name="telefone" placeholder="Insira seu telefone" required>
			</div>
			
			</br>
		<div class="form-row">	
			<div class="col-md-7 mb-3" style="margin: 0px 0px 10px 0px;">
				<input type="email" class="form-control" id="email" name="email" placeholder="Insira seu e-mail" required>
			</div>

			<div class="col-md-5 mb-3" style="margin: 0px 0px 10px 0px;">
				<select name="assunto" id="" class="form-control" required>
					<option value="1ª habilitação">1ª Habilitação</option>
					<option value="Adição de categoria">Adição de categoria</option>
					<option value="Financeiro">Financeiro</option>
					<option value="Outros">Outros</option>
				</select>
			</div>
			</br>
		</div>	
			<div class="col-md-12 mb-3" style="margin: 0px 0px 10px 0px;">
				<textarea class="form-control" name="mensagem" rows="4" placeholder="Mensagem" required></textarea>
			</div>   
		
	</div>	

    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-send"></i> Enviar</button>
</form>