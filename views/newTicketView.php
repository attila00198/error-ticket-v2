<div class="col-sm-12 col-md-4 mt-4">
    <p>Kérem töltse ki az alábbi ürlapot a hiba bejelenéséhez!</p>
    <form class="form-control" action="tickets" method="POST">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="name" placeholder="Náv">
            <label for="name">Náv</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            <label for="description">Hibajelenség leírása</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary m-2">Küldés</button>
    </form>
</div>