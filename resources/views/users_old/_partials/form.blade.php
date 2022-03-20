<label for="name">Nome:</label>
<input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}"><br />

<label for="email">E-mail:</label>
<input type="text" name="email" placeholder="E-mail:" value="{{ $user->email ?? old('email') }}"><br />

<label for="password">Senha:</label>
<input type="password" name="password" placeholder="Senha:"><br />

<button type="submit">Salvar</button>