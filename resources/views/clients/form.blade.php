<div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{ @$client->name }}">
</div>
<div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="{{@$client->email}}">
</div>
<div class="form-group">
        <label for="age">Idade</label>
        <input type="text" class="form-control" id="age" name="age" placeholder="Idade" value="{{@$client->age}}">
</div>
<div class="form-group">
        <label for="photo">Foto</label>
        <input type="file" class="form-control" id="photo" name="photo">
</div>
<button type="submit" class="btn btn-primary">Salvar</button>

