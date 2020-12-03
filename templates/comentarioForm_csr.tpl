<div class="container">
        <form action="" method="" id="form-comentario" data-iduser="{$usuario_smarty->id_usuario}">

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Agrega un comentario</label>
                <textarea class="form-control" id="comentario" rows="3" required></textarea >
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Valoración</label>
                <select class="form-control" id="valoracion" required >
                <option value=1>★</option>
                <option value=2>★★</option>
                <option value=3>★★★</option>
                <option value=4>★★★★</option>
                <option value=5>★★★★★</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Enviar comentario</button>

        </form>
    </div>