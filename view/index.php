<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <div class="container p-5 col-sm-4" >
        <form action="store" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Montant</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                <span style="color:red;"><?php echo $errors["montant"]??""?></span>
            </div>
            <select name="proprietaire">
                        <option value="Depot"></option>
                        <option value="Retrait"></option>
            </select>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-dark ">Submit</button>
            </div>
        </form>
    </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Date et heure </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($transactions as $transaction):?>
                <tr>
                    <td><?php echo $transaction->setType(); ?></td>
                    <td><?php echo $transaction->setMontant(); ?></td>
                    <td><?php echo $transaction->setDateHeure(); ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

</body>
</html>