<!-- utilzando bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<br><br><br><br><br><br>
<center>

    <h1><b>Adicionar Usuario</b></h1>

    <br><br>
    <form method="POST" action="adicionar_action.php">
        <label class="btn btn-outline-secondary">
            Nome:<br><p>digite qualquer nome</p>
            <input type="text" name="name" />
        </label><br><br><br>

        <label class="btn btn-outline-secondary">
            Email:<br> <p>Formato do email @.....com.br</p>
            <input type="email" name="email" />
        </label><br><br><br>

        <input class="btn btn-success " type="submit" value="adicionar" />

    </form>
</center>