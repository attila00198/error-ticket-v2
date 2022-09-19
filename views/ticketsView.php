<div>
    <div class="col-md-10 mx-auto">
        <?php if($tickets == null): ?>
        <h1>Nincsenek beküldött jegyek</h1>
        <?php else: ?>
        <table class="table table-fixed table-primary table-striped">
            <thead>
                <tr>
                    <th scope="col">Név</th>
                    <th scope="col">Email</th>
                    <th scope="col">Létrehozva</th>
                    <th scope="col">Leírás</th>
                    <th scope="col">Művelet</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tickets as $ticket) : ?>
                    <tr class="col <?php if ($ticket["solved"] == 0) echo "table-danger"; ?>">
                        <td scope="row"><?= $ticket["created_by"] ?></td>
                        <td><?= $ticket["email"] ?></td>
                        <td><?= $ticket["created_at"] ?></td>
                        <td><?= $ticket["desctiption"] ?></td>
                        <td>
                        <?php if ($ticket["solved"] == 0) : ?>
                            <form action="tickets" method="POST">
                            <input type="number" name="id" id="id" value="<?= $ticket["id"] ?>" hidden>
                            <button class="btn btn-success" type="submit" name="success">Kész</button>
                            </form>
                        <?php endif; ?>
                        <?php if ($ticket["solved"] == 1) : ?>
                            <form action="tickets" method="POST">
                            <input type="number" name="id" id="id" value="<?= $ticket["id"] ?>" hidden>
                            <button class="btn btn-danger" type="delete" name="delete">Törlés</button>
                            </form>
                        <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>